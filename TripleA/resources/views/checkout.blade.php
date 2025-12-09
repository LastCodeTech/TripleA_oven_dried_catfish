<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Checkout Page - Payment &amp; Shipping</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#006400",
                        "accent": "#FFD700",
                        "background-light": "#F8F8F8",
                        "background-dark": "#1a1a1a",
                        "text-light": "#333333",
                        "text-dark": "#e0e0e0",
                        "card-light": "#FFFFFF",
                        "card-dark": "#2c2c2c",
                        "border-light": "#E0E0E0",
                        "border-dark": "#444444",
                    },
                    fontFamily: {
                        "display": ["'Playfair Display'", "serif"],
                        "body": ["'Inter'", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark">
    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="relative flex min-h-screen w-full flex-col">
            <!-- Top App Bar -->
            <header
                class="sticky top-0 z-10 flex items-center bg-background-light/80 dark:bg-background-dark/80 p-4 backdrop-blur-sm">
                <span class="flex size-10 shrink-0 items-center justify-center text-text-light dark:text-text-dark">
                    <a href="{{ route('cart') }}"><span class="material-symbols-outlined">arrow_back_ios_new</span></a>
                </span>
                <h1 class="font-display text-2xl font-bold flex-1 text-center pr-10">Checkout</h1>
            </header>
            <!-- Progress Stepper -->
            <div class="flex w-full flex-row items-center justify-center gap-2 px-4 py-3">
                <span class="text-sm font-semibold text-primary">Delivery</span>
                <span class="material-symbols-outlined text-base text-gray-400 dark:text-gray-500">chevron_right</span>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Payment</span>
                <span class="material-symbols-outlined text-base text-gray-400 dark:text-gray-500">chevron_right</span>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Confirm</span>
            </div>
            <main class="flex-1 pb-32">
                <div class="flex flex-col p-4 gap-4">
                    <!-- Accordions for Checkout Steps -->
                    <details
                        class="flex flex-col rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark px-4 group"
                        open="">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 py-4">
                            <p class="font-display text-xl font-bold">1. Delivery Information</p>
                            <span
                                class="material-symbols-outlined text-text-light dark:text-text-dark transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="flex flex-col gap-4 pb-5">
                            <label class="flex flex-col w-full">
                                <p class="text-sm font-medium pb-2 text-text-light dark:text-text-dark">Full Name</p>
                                <input name='name'
                                    class="form-input w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary placeholder:text-gray-400 dark:placeholder:text-gray-500 py-3 px-4 text-base"
                                    placeholder="John Doe" type="text" value='{{ auth()->user()->name }}' />
                            </label>
                            @error('name')
                                <span class="text-red-600 text-sm p-2 mb-2">{{ $message }}</span>
                            @enderror
                            <label class="flex flex-col w-full">
                                <p class="text-sm font-medium pb-2 text-text-light dark:text-text-dark">Street Address
                                </p>
                                <input name="address"
                                    class="form-input w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary placeholder:text-gray-400 dark:placeholder:text-gray-500 py-3 px-4 text-base"
                                    placeholder="1234 Market St" type="text" value="" />
                            </label>
                            @error('address')
                                <span class="text-red-600 text-sm p-2 mb-2">{{ $message }}</span>
                            @enderror
                            <div class="flex gap-4">
                                <label class="flex flex-col flex-1">
                                    <p class="text-sm font-medium pb-2 text-text-light dark:text-text-dark">city</p>
                                    <select name="city" id="city" required
                                        class="w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary placeholder:text-gray-400 dark:placeholder:text-gray-500 py-3 px-4 text-base">
                                        @foreach ($cities as $city)
                                            <option value='{{ $city->id }}' data-city="{{ $city->deliveryPrice }}">
                                                {{ $city->city }} -
                                                &#x20A6;{{ $city->deliveryPrice }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                @error('city')
                                    <span class="text-red-600 text-sm p-2">{{ $message }}</span>
                                @enderror

                                <label class="flex flex-col flex-1">
                                    <p class="text-sm font-medium pb-2 text-text-light dark:text-text-dark">Phone Number
                                    </p>
                                    <input name="tel" required
                                        class="form-input w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary placeholder:text-gray-400 dark:placeholder:text-gray-500 py-3 px-4 text-base"
                                        placeholder="+234" type="tel" value="" />
                                </label>
                            </div>
                        </div>
                    </details>
                    <details
                        class="flex flex-col rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark px-4 group">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 py-4">
                            <p class="font-display text-xl font-bold">2. Payment Method</p>
                            <span
                                class="material-symbols-outlined text-text-light dark:text-text-dark transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="flex flex-col gap-3 py-4">
                            <div class="flex flex-col gap-3">
                                <label
                                    class="flex cursor-pointer items-center gap-4 rounded-lg border-2 border-primary bg-primary/10 dark:bg-primary/20 p-4">
                                    <input checked=""
                                        class="form-radio h-5 w-5 border-gray-400 dark:border-gray-500 text-primary focus:ring-primary"
                                        name="payment-method" type="radio" />
                                    <div class="flex grow flex-col">
                                        <p class="font-semibold text-text-light dark:text-text-dark">Credit Card</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pay with your credit or
                                            debit
                                            card</p>
                                    </div>
                                </label>
                                <label
                                    class="flex cursor-pointer items-center gap-4 rounded-lg border-2 border-border-light dark:border-border-dark p-4">
                                    <input
                                        class="form-radio h-5 w-5 border-gray-400 dark:border-gray-500 text-primary focus:ring-primary"
                                        name="payment-method" type="radio" />
                                    <div class="flex grow flex-col">
                                        <p class="font-semibold text-text-light dark:text-text-dark">PayPal</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Checkout securely with
                                            PayPal
                                        </p>
                                    </div>
                                </label>
                                <label
                                    class="flex cursor-pointer items-center gap-4 rounded-lg border-2 border-border-light dark:border-border-dark p-4">
                                    <input
                                        class="form-radio h-5 w-5 border-gray-400 dark:border-gray-500 text-primary focus:ring-primary"
                                        name="payment-method" type="radio" />
                                    <div class="flex grow flex-col">
                                        <p class="font-semibold text-text-light dark:text-text-dark">Apple Pay</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pay with one tap using Apple
                                            Pay
                                        </p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </details>
                    <!-- Order Summary -->
                    <div
                        class="rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark p-4">
                        <h2 class="font-display text-xl font-bold mb-4">Order Summary</h2>
                        <div class="space-y-4">

                            @foreach ($items as $item)
                                <!-- Product Item -->
                                <div class="flex items-center gap-4">
                                    <img class="h-16 w-16 rounded-lg object-cover"
                                        data-alt="A close-up of oven-dried catfish fillets on a wooden board"
                                        src="{{ Storage::disk('public')->url($item->product['image']) }}" />
                                    <div class="flex-1">
                                        <p class="font-semibold text-text-light dark:text-text-dark">
                                            {{ $item->product['name'] }}</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Qty: {{ $item->quantity }}
                                        </p>
                                    </div>
                                    <p class="font-semibold text-text-light dark:text-text-dark">
                                        {{ $item->product['price'] }}</p>
                                </div>
                            @endforeach

                        </div>
                        <div class="my-4 h-px bg-border-light dark:bg-border-dark"></div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <p class="text-gray-600 dark:text-gray-400">Subtotal</p>
                                <p class="font-medium text-text-light dark:text-text-dark">
                                    &#x20A6;{{ number_format($product_total, 2) }}</p>
                            </div>
                            <div class="flex justify-between text-sm">
                                <p class="text-gray-600 dark:text-gray-400">Delivery</p>
                                <p class="font-medium text-text-light dark:text-text-dark" id="delivery">
                                    &#x20A6;0..00</p>
                            </div>
                            <div class="flex justify-between text-sm">
                                <p class="text-gray-600 dark:text-gray-400">Estimated Taxes</p>
                                <p class="font-medium text-text-light dark:text-text-dark">&#x20A6;0.00</p>
                            </div>
                        </div>
                        <div class="my-4 h-px bg-border-light dark:bg-border-dark"></div>
                        <div class="flex justify-between">
                            <p class="text-lg font-bold text-text-light dark:text-text-dark">Grand Total</p>
                            <p class="text-lg font-bold text-text-light dark:text-text-dark" id="total-price3"
                                data-value="{{ $product_total }}">
                                &#x20A6;<strong id='tt3'>{{ number_format($product_total, 2) }}</strong></p>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Sticky Footer -->
            <footer
                class="fixed bottom-0 left-0 right-0 z-10 border-t border-border-light dark:border-border-dark bg-background-light/90 dark:bg-background-dark/90 p-4 backdrop-blur-sm">
                <div class="flex items-center justify-between mb-3">
                    <p class="text-gray-600 dark:text-gray-400">Total</p>
                    <p class="font-display text-2xl font-bold text-text-light dark:text-text-dark">
                        <span id="total-price" data-value="{{ $product_total }}">&#x20A6;<strong
                                id='tt'>{{ number_format($product_total, 2) }}</strong></span>
                    </p>
                </div>

                {{-- 
                <button
                type="submit"
                    class="flex w-full items-center justify-center gap-2 rounded-full bg-primary py-4 text-center text-base font-bold text-white transition hover:bg-primary/90">
                    <span class="material-symbols-outlined text-xl">lock</span>
                    <span>Pay <span id="total-price2" data-value="{{ $product_total }}">&#x20A6;<strong id='tt2'>{{ number_format($product_total, 2) }}</strong></span></span>
                </button> --}}

                <button type="submit"
                    class="flex w-full items-center justify-center gap-2 rounded-full bg-primary py-4 text-center text-base font-bold text-white transition hover:bg-primary/90">
                    <span class="material-symbols-outlined text-xl">lock</span>
                    <span>
                        Pay
                        <span id="total-price2" data-value="{{ $product_total }}">
                            ₦<strong id="tt2">{{ number_format($product_total, 2) }}</strong>
                        </span>
                    </span>
                </button>








            </footer>
        </div>
    </form>


    <script>
        let city = document.getElementById('city');
        let delivery = document.getElementById('delivery');
        let tt = document.getElementById('tt');
        let tt2 = document.getElementById('tt2');
        let tt3 = document.getElementById('tt3');
        let priceNumber = Number(document.getElementById('total-price').dataset.value);
        let priceNumber2 = Number(document.getElementById('total-price2').dataset.value);
        let priceNumber3 = Number(document.getElementById('total-price3').dataset.value);

        city.addEventListener('change', () => {
            sumGoods();
        });

        setTimeout(() => {
            sumGoods();
        }, 100);

        function sumGoods() {
            let deliveryValue = city.options[city.selectedIndex];

            let deliveryPrice = Number(delivery.textContent = deliveryValue.dataset.city);
            everything = deliveryPrice + priceNumber;
            tt.textContent = everything;
            tt2.textContent = everything;
            tt3.textContent = everything;
        }
    </script>
</body>

</html>
