<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cart Page - Your Order</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<!-- Top App Bar -->
<header class="sticky top-0 z-10 flex items-center bg-background-light dark:bg-background-dark/80 backdrop-blur-sm p-4 pb-2 justify-between border-b border-neutral-subtle-light dark:border-neutral-subtle-dark">
<button class="text-neutral-text-light dark:text-neutral-text-dark flex size-10 shrink-0 items-center justify-center rounded-full">
<span class="material-symbols-outlined text-2xl">arrow_back</span>
</button>
<h1 class="text-primary dark:text-secondary text-lg font-bold leading-tight tracking-tight flex-1 text-center">Your Order</h1>
<div class="size-10 shrink-0"></div> <!-- Spacer for centering title -->
</header>
<main class="flex-grow pb-56"> <!-- Padding bottom to avoid overlap with sticky footer -->
<!-- Cart Items List -->
<div class="flex flex-col gap-4 pt-6 px-4">
<!-- List Item 1 -->
<div class="flex items-center gap-4 bg-neutral-soft-light dark:bg-neutral-soft-dark p-3 rounded-xl shadow-sm">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-20 shrink-0" data-alt="Smoked Headless Catfish in a package" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA6DHxVj5VqSMDYsJxjJEal3Q2197zzm5Pp-x4GDNpmitbiihBHPIQLD6GIurvr-Pbo9Kgdzt90bLrv8WIYlBpkkVzEGP77OQ09bw_UIl_fZYHOmcTLtbK6lMvmM5cTYm17r5fhZnlNingquaRYjqkiXOr6bJR72ixEX4g8OyF7G9lyDHe-g8HWZOR1X6PuOU2kuNkNU_cipCjcSqWeinKJLjYQkr3cIxiONhsOqjN46PXo77GbAcWMAPCUJ6ZAgp1Qi8DjurO1xHM");'></div>
<div class="flex-grow">
<div class="flex flex-col justify-center">
<p class="text-neutral-text-light dark:text-neutral-text-dark text-base font-semibold leading-normal line-clamp-1">Smoked Headless Catfish</p>
<p class="text-neutral-text-light/70 dark:text-neutral-text-dark/70 text-sm font-normal leading-normal line-clamp-2">250g</p>
<p class="text-secondary text-base font-bold mt-1">$25.00</p>
</div>
</div>
<div class="flex flex-col items-end justify-between self-stretch shrink-0">
<button class="text-neutral-text-light/60 dark:text-neutral-text-dark/60">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
<div class="flex items-center gap-2 text-neutral-text-light dark:text-neutral-text-dark">
<button class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">-</button>
<span class="text-base font-medium leading-normal w-4 text-center">2</span>
<button class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">+</button>
</div>
</div>
</div>
<!-- List Item 2 -->
<div class="flex items-center gap-4 bg-neutral-soft-light dark:bg-neutral-soft-dark p-3 rounded-xl shadow-sm">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-20 shrink-0" data-alt="Spicy Oven-Dried Catfish in a package" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2wlOGWW3qOoTjRaKRggTbklSfcyYDs6XQdYBctTFrCN3IhwB-1xOa15iOdG0Waa7lvSTmHYPRYNEuh9udCP01z2Gt1fN6Ym0TJfeZ5Z34Z26Omto9jw513fJZpcqMBGtN7HXbHQHN6YyNAFWb69GRo-XvZeJDOozQxGVMP2pwW1os6NYH8wjma90bGlRlyp9l3yz2WQtxx9GN_bJNbMrZ2O_tIqRDVUfDE0W6QL2IaocjrX0ykEbo5VW44giknvVeRUQgIrHKhD0");'></div>
<div class="flex-grow">
<div class="flex flex-col justify-center">
<p class="text-neutral-text-light dark:text-neutral-text-dark text-base font-semibold leading-normal line-clamp-1">Spicy Oven-Dried Catfish</p>
<p class="text-neutral-text-light/70 dark:text-neutral-text-dark/70 text-sm font-normal leading-normal line-clamp-2">500g</p>
<p class="text-secondary text-base font-bold mt-1">$45.00</p>
</div>
</div>
<div class="flex flex-col items-end justify-between self-stretch shrink-0">
<button class="text-neutral-text-light/60 dark:text-neutral-text-dark/60">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
<div class="flex items-center gap-2 text-neutral-text-light dark:text-neutral-text-dark">
<button class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">-</button>
<span class="text-base font-medium leading-normal w-4 text-center">1</span>
<button class="text-lg font-medium leading-normal flex size-7 items-center justify-center rounded-full bg-neutral-subtle-light dark:bg-neutral-subtle-dark cursor-pointer">+</button>
</div>
</div>
</div>
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
<button class="mt-5 w-full bg-primary text-white dark:bg-secondary dark:text-primary font-bold py-4 px-5 rounded-xl text-base leading-tight tracking-tight shadow-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-primary/50 dark:focus:ring-secondary/50 focus:ring-offset-2 dark:focus:ring-offset-background-dark">
                    Proceed to Checkout
                </button>
</div>
</footer>
</div>
</body></html>