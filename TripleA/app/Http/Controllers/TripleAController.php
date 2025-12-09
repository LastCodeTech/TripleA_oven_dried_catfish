<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\City;
use App\Models\Contactmsg;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripleAController extends Controller
{
    public function home(){
        $products=Product::all();
        return view('home',compact('products'));
    }
   public function shop()
{
    $products = Product::all();

    $inCarts = Cart::where('user_id', Auth::id())
        ->pluck('product_id')  
        ->toArray();
    return view('shop', compact('products', 'inCarts'));
}

    public function about(){
        return view('about');
    }
    public function header(){
        $cartItemsTotal=Cart::count();
        return view('header',compact('cartItemsTotal'));
    }
    public function gallery(){
        return view('gallery');
    }
    public function blog(){
        $blogs=Blog::all();
        return view('blog',compact('blogs'));
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        $product_total=0;
        $viewCarts=Cart::where('user_id',Auth::id())
                    ->with('product')
                    ->get();
        foreach($viewCarts as $cart){
            $product_total += (int)$cart->product->price * $cart->quantity;
            // $product_quantity=$cart->quantity;
            // $total_cost=$product_total*$product_quantity;
            
        }

        $count = Cart::where('user_id',Auth::id())->count();
        return view('cart',compact('viewCarts','product_total', 'count'));
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function checkout(){
        $product_total=0;
         $items=Cart::where('user_id',Auth::id())
                    ->with('product')
                    ->get();
                    foreach($items as $goods){
                $product_total += (int)$goods->product->price * $goods->quantity;
                    }
        $cities = City::all();
        return view('checkout',compact('items','product_total','cities'));
    }
   
    public function profile(){
        return view('profile');
    }
    public function order(){
        return view('order');
    }
    public function contactmsgProcess(Request $request){
       $validate =$request->validate([
        'number'=>'min:11|integer|required',
        'subject'=>'min:10|required|string',
        'message'=>'min:10|required|string'
       ]);
       $validate['user_id']=Auth::user()->id;
       $create=Contactmsg::create($validate);
       if($create){
        return redirect()->route('contact')->with('message','your message has been recieved we will give you a call');
       }
       else{
         return redirect()->route('contact')->with('message','An error occurred pls retry or check back later ');
       }
    }

    public function cartAdd(Request $request){
       $productId=$request->product_id;
       $cartItem=Cart::where('user_id',Auth::id())
                        ->where('product_id',$productId)
                        ->first();
                        
        if($cartItem){
           $cartItem->quantity+=1;
            $cartItem->Save();
         return redirect()->route('shop')->with('message', 'Quantity increased!');
        }
        else {
    Cart::create([
        'user_id' => Auth::id(),
        'product_id' => $productId,
        'quantity' => 1
    ]);
    return redirect()->route('shop')->with('message', 'Item added to cart!');
}}

public function UpdateCartQty(Request $request,$id){
  
    $item=Cart::where('user_id',Auth::id())->findOrFail($id);
    if($request->action === 'increase'){
        $item->quantity+=1;
         $item->save();
         return redirect()->route('cart');
       
    }
    if($request->action === 'decrease' && $item->quantity >1){
        $item->quantity--;
        $item->save();
        return redirect()->route('cart');
    }
}

public function deleteItem($id){
    // dd('hello');
    Cart::where('user_id',Auth::id())
                ->where('id',$id)
                ->delete();
 return redirect()->route('cart');

}

}
