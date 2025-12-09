<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order Success - Triple A Catfish</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ecc1",
                        "background-light": "#f6f8f8",
                        "background-dark": "#10221e",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar hiding for cleaner mobile look if needed */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-gray-100 dark:bg-gray-900 flex justify-center min-h-screen">
<div class="relative flex h-auto min-h-screen w-full max-w-[480px] flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden shadow-2xl font-display">

<!-- Success Hero Section -->
<div class="flex flex-col items-center pt-8 px-4">
<div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mb-4 ring-4 ring-primary/10">
<span class="material-symbols-outlined text-primary text-[48px] fill-1">check_circle</span>
</div>
<h2 class="text-[#0d1b19] dark:text-white tracking-tight text-[28px] font-bold leading-tight px-4 text-center pb-2">Order Confirmed!</h2>
<p class="text-[#0d1b19]/70 dark:text-white/70 text-base font-normal leading-normal pb-3 px-4 text-center">
                Thank you for your purchase! Enjoy your nutritious oven dried catfish.
            </p>
</div>
<div class="h-4 bg-transparent"></div>

<div class="h-6 bg-transparent"></div>
<!-- Timeline Widget -->
<div class="px-4">
<h3 class="text-[#0d1b19] dark:text-white text-lg font-bold mb-4 px-1">Order Status</h3>
<div class="bg-white dark:bg-[#1a2e2a] rounded-xl p-5 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="grid grid-cols-[32px_1fr] gap-x-3">
<!-- Step 1: Placed -->
<div class="flex flex-col items-center gap-1">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0 z-10">
<span class="material-symbols-outlined text-[#0d1b19] text-[18px] font-bold">check</span>
</div>
<div class="w-[2px] bg-primary h-full min-h-[24px]"></div>
</div>
<div class="flex flex-col pb-6 pt-1">
<p class="text-[#0d1b19] dark:text-white text-base font-bold leading-none">Order Placed</p>
<p class="text-sm text-[#0d1b19]/60 dark:text-white/60 mt-1">We have received your order.</p>
</div>
<!-- Step 2: Processing (Active) -->
<div class="flex flex-col items-center gap-1">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0 z-10 ring-4 ring-primary/20">
<span class="material-symbols-outlined text-[#0d1b19] text-[18px]">inventory_2</span>
</div>
<div class="w-[2px] bg-[#cfe7e3] dark:bg-gray-700 h-full min-h-[24px]"></div>
</div>
<div class="flex flex-col pb-6 pt-1">
<p class="text-[#0d1b19] dark:text-white text-base font-bold leading-none">Processing</p>
<p class="text-sm text-[#0d1b19]/60 dark:text-white/60 mt-1">Your order is being packed.</p>
</div>
<!-- Step 3: Delivery -->
<div class="flex flex-col items-center gap-1">
<div class="w-8 h-8 rounded-full bg-[#cfe7e3] dark:bg-gray-700 flex items-center justify-center shrink-0 z-10">
<span class="material-symbols-outlined text-[#0d1b19]/40 dark:text-white/40 text-[18px]">local_shipping</span>
</div>
</div>
<div class="flex flex-col pt-1">
<p class="text-[#0d1b19]/60 dark:text-white/60 text-base font-medium leading-none">Estimated Delivery</p>
<p class="text-sm text-[#0d1b19] dark:text-white font-bold mt-1">less than 48hrs</p>
</div>
</div>
</div>
</div>
<div class="h-6 bg-transparent"></div>
<!-- Address Section -->
<div class="px-4">
    <h3 class="text-[#0d1b19] dark:text-white text-lg font-bold mb-4 px-1">Order Details</h3>
<div class="bg-white dark:bg-[#1a2e2a] rounded-xl p-4 shadow-sm border border-gray-100 dark:border-gray-800 flex items-start gap-4">

<div>
  @if(session('order'))
            <div class="order-details">
                
                <p><strong>Order Number:</strong> {{ session('order')->order_number }}</p>
                <p><strong>Amount Paid:</strong> ₦{{ number_format(session('order')->amount, 2) }}</p>
                <p><strong>Status:</strong> <span style="color: green;">{{ session('order')->status }}</span></p>
                <p><strong>Payment Reference:</strong> {{ session('order')->payment_reference }}</p>
                <p><strong>Date:</strong> {{ session('order')->paid_at->format('F j, Y, g:i a') }}</p>
            </div>
        @endif
</div>
</div>
</div>
<!-- Spacer to push footer down if needed -->
<div class="flex-grow min-h-[40px]"></div>
<!-- Actions Footer -->
<div class="p-4 bg-background-light dark:bg-background-dark sticky bottom-0 border-t border-gray-100 dark:border-gray-800 backdrop-blur-lg bg-opacity-95 dark:bg-opacity-95">
<div class="flex flex-col gap-3">
<a href="{{route('home')}}"><button class="w-full bg-primary hover:bg-primary/90 text-[#0d1b19] h-12 rounded-lg font-bold text-base flex items-center justify-center gap-2 transition-transform active:scale-[0.98]">
<span class="material-symbols-outlined text-[20px]">home</span>
                    Home
                </button></a>
<button class="w-full bg-transparent border border-[#0d1b19]/10 dark:border-white/20 text-[#0d1b19] dark:text-white h-12 rounded-lg font-bold text-base flex items-center justify-center gap-2 transition-colors hover:bg-black/5 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">description</span>
                    Download Invoice
                </button>
<div class="text-center mt-2">
<a class="text-sm text-[#0d1b19]/60 dark:text-white/60 hover:text-primary transition-colors underline decoration-dotted" href="{{route('contact')}}">Need help with this order?</a>
</div>
</div>
</div>
</div>
</body></html>