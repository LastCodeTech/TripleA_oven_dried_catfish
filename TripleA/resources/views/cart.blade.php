<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cart Page - Your Order</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0D2F4B",
                        "secondary": "#D4A056",
                        "background-light": "#F9F9F9",
                        "background-dark": "#121212",
                        "neutral-text-light": "#333333",
                        "neutral-text-dark": "#E0E0E0",
                        "neutral-subtle-light": "#E0E0E0",
                        "neutral-subtle-dark": "#333333",
                        "neutral-soft-light": "#F9F9F9",
                        "neutral-soft-dark": "#1F1F1F",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
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
      /* min-height: max(884px, 100dvh); */
    }
  </style>
  </head>
<body class="font-display bg-background-light dark:bg-background-dark">
    <x-header />
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<main class="flex-grow pb-56 mb-20"> <!-- Padding bottom to avoid overlap with sticky footer -->
<!-- Cart Items List -->
<div class="flex flex-col gap-4 pt-6 px-4">
    @foreach($viewCarts as $viewCart)
    <!-- List Item 1 -->
<div class="flex items-center gap-4 bg-neutral-soft-light dark:bg-neutral-soft-dark p-3 rounded-xl shadow-sm">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-20 shrink-0" data-alt="Smoked Headless Catfish in a package" style='background-image: url("{{Storage::disk('public')->url($viewCart->product['image'])}}");'></div>
<div class="flex-grow">
<div class="flex flex-col justify-center">
<p class="text-neutral-text-light dark:text-neutral-text-dark text-base font-semibold leading-normal line-clamp-1">{{$viewCart->product['name']}}</p>
<p class="text-neutral-text-light/70 dark:text-neutral-text-dark/70 text-sm font-normal leading-normal line-clamp-2">{{$viewCart->product['size']}}</p>
<p class="text-secondary text-base font-bold mt-1">{{$viewCart->product['price']}}</p>
</div>
</div>
<div class="flex flex-col items-end justify-between self-stretch shrink-0">
<form action="{{route('deleteItem',$viewCart->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="text-[#1a4c42] ">
<i class="fa-solid fa-trash-can text-xl"></i>
</button>
</form>
<form action="{{route('UpdateCartQty',$viewCart->id)}}"  method="POST">
    @csrf
    {{-- @method('PUT') --}}
<div class="flex items-center gap-2 text-neutral-text-light dark:text-neutral-text-dark">
<button name='action' value="decrease" class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">-</button>
<span class="text-base font-medium leading-normal w-4 text-center">{{$viewCart->quantity}}</span>
<button name="action" value="increase" class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">+</button>
</div></form>
</div>
</div>
    @endforeach
</div>
</main>
<!-- Sticky Footer with Order Summary and CTA -->
<footer class="fixed bottom-0 left-0 right-0 z-10 bg-background-light dark:bg-neutral-soft-dark border-t border-neutral-subtle-light dark:border-neutral-subtle-dark shadow-[0_-4px_12px_rgba(0,0,0,0.05)] rounded-t-2xl">
<div class="p-5">
<h2 class="text-neutral-text-light dark:text-neutral-text-dark text-lg font-bold leading-tight tracking-tight mb-4">Order Summary</h2>
<div class="space-y-2">
<div class="flex justify-between gap-x-6">
<p class="text-neutral-text-light/80 dark:text-neutral-text-dark/80 text-sm font-normal leading-normal">Subtotal</p>
<p class="text-neutral-text-light dark:text-neutral-text-dark text-sm font-medium leading-normal text-right">$95.00</p>
</div>
<div class="flex justify-between gap-x-6">
<p class="text-neutral-text-light/80 dark:text-neutral-text-dark/80 text-sm font-normal leading-normal">Shipping</p>
<p class="text-neutral-text-light dark:text-neutral-text-dark text-sm font-normal leading-normal text-right">Calculated at next step</p>
</div>
<div class="border-t border-dashed border-neutral-subtle-light dark:border-neutral-subtle-dark my-3"></div>
<div class="flex justify-between gap-x-6">
<p class="text-neutral-text-light dark:text-neutral-text-dark text-base font-bold leading-normal">Total</p>
<p class="text-secondary text-xl font-bold leading-normal text-right">$95.00</p>
</div>
</div>
 <a href="{{route('checkout')}}"><button class="mt-5 w-full  text-white bg-[#1a4c42] dark:text-primary font-bold py-4 px-5 rounded-xl text-base leading-tight tracking-tight shadow-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-primary/50 dark:focus:ring-secondary/50 focus:ring-offset-2 dark:focus:ring-offset-background-dark">
                   Proceed to Checkout
                </button></a>
</div>
</footer>
</div>
</body></html>