<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\City;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Services\SimplePaystackService;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{

    public function showCheckout()
    {
        return view('checkout');
    }

    public function processCheckout(Request $request)
    {
        $validated = $request->validate([
            'tel' => 'required|numeric|min:11',
            'address' => 'required|string|min:5',
            'city' => 'required|exists:cities,id',
            'name' => 'required|string',
        ]);

        $user = Auth::user();

        $carts = Cart::where('user_id', $user->id)->with('product')->get();
        $total = 0;

        foreach ($carts as $cart) {
            $price = $cart->product->price * $cart->quantity;
            $total += $price;     
        }


        

        $deliveryFee = City::find($validated['city'])->deliveryPrice;

        
        $finalTotal = (int) $total + (int) $deliveryFee;

       



        $order = Order::create([
            'user_id' => $user->id,
            'tel' => $validated['tel'],
            'customer_email' => $user->email,
            'amount' => $total,
            'address' => $validated['address'],
            'city_id' => $validated['city'],
            'items' => [
                'cart_items' => $carts,
            ],
            'status' => 'pending',
        ]);

        $paystack = new SimplePaystackService();

        $payment = $paystack->makePayment(
            amount: $finalTotal,
            customerEmail: $user->email,
            callbackUrl: route('payment.callback'),
            metadata: [
                'order_id' => $order->id,
                'customer_ip' => $request->ip(),
            ]
        );

        if (!$payment['success']) {
            $order->update(['status' => 'failed']);
            return back()->with('error', $payment['message']);
        }

        session([
            'current_order_id' => $order->id,
            'payment_reference' => $payment['reference'],
        ]);

        return redirect($payment['authorization_url']);
    }

    public function paymentCallback(Request $request)
    {
        $reference = $request->reference ?? session('payment_reference');

        if (!$reference) {
            return redirect()->route('checkout.failed')
                ->with('error', 'No payment receipt found!');
        }

        $paystack = new SimplePaystackService();
        $verification = $paystack->verifyPayment($reference);

        if (!$verification['success']) {
            $this->markOrderAsFailed($verification['message']);
            return redirect()->route('checkout.failed')
                ->with('error', $verification['message']);
        }

        $orderId = session('current_order_id');
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('checkout.failed')
                ->with('error', 'Order not found!');
        }

        $order->update([
            'status' => 'paid',
            'payment_reference' => $reference,
            'payment_data' => $verification,
            'paid_at' => now(),
        ]);

        session()->forget(['current_order_id', 'payment_reference']);

        return redirect()->route('checkout.success')
            ->with('success', 'Payment successful!')
            ->with('order', $order);
    }


    public function handleWebhook(Request $request)
    {
        $signature = $request->header('x-paystack-signature');
        $payload = $request->getContent();
        $secret = config('services.paystack.secret_key');

        $validSignature = hash_hmac('sha512', $payload, $secret) === $signature;

        if (!$validSignature) {
            return response()->json(['error' => 'You are not Paystack!'], 403);
        }

        $event = json_decode($payload);

        if ($event->event === 'charge.success') {
            $reference = $event->data->reference;

            $paystack = new SimplePaystackService();
            $verification = $paystack->verifyPayment($reference);

            if ($verification['success']) {
                $metadata = $verification['metadata'] ?? [];
                $orderId = $metadata['order_id'] ?? null;

                if ($orderId) {
                    $order = Order::find($orderId);

                    if ($order && $order->status === 'pending') {
                        // $order->update([
                        //     'status' => 'paid',
                        //     'payment_reference' => $reference,
                        //     'payment_data' => $verification,
                        //     'paid_at' => now(),
                        // ]);


                        // DB::transaction(function () use ($order, $reference, $verification) {
                        //     $order->update(['status' => 'paid', 'payment_reference' => $reference, 'payment_data' => $verification, 'paid_at' => now()]);
                        //     foreach ($order->items as $it) {
                        //         $ok = Product::where('id', $it['id'])->where('quantity', '>=', $it['quantity'])->decrement('quantity', $it['quantity']);
                        //         if (!$ok) throw new \Exception("Insufficient stock for product {$it['id']}");
                        //     }
                        // });

                        // You could send an email here!
                        // Mail::to($order->customer_email)->send(new OrderConfirmation($order));
                    }
                }
            }
        }

        return response()->json(['status' => 'success']);
    }


    public function success()
    {
         Cart::where('user_id', Auth::id())->delete();
        return view('checkout-success');
    }


    public function failed()
    {
        return view('checkout-failed');
    }


    private function markOrderAsFailed($error)
    {
        $orderId = session('current_order_id');
        if ($orderId) {
            $order = Order::find($orderId);
            if ($order && $order->status === 'pending') {
                $order->update([
                    'status' => 'failed',
                    'payment_data' => ['error' => $error],
                ]);
            }
        }
        session()->forget(['current_order_id', 'payment_reference']);
    }
}
