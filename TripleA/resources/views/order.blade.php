<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Wallet &amp; Payments - User Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<style>
      .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
      }
    </style>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#0A2342",
              "accent": "#D4AF37",
              "background-light": "#FFFFFF",
              "background-dark": "#051221",
              "text-light": "#0A2342",
              "text-dark": "#F0F2F5",
              "subtle-light": "#F0F2F5",
              "subtle-dark": "#162B4A",
              "success": "#28A745",
              "danger": "#DC3545",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
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
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<!-- Top App Bar -->
<header class="sticky top-0 z-10 flex h-16 items-center border-b border-subtle-light dark:border-subtle-dark/20 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm px-4">
<button class="flex size-10 shrink-0 items-center justify-center rounded-full text-text-light dark:text-text-dark">
<a href="{{route('dashboard')}}"><span class="material-symbols-outlined text-2xl">arrow_back</span></a>
</button>
<h1 class="text-lg font-bold flex-1 text-center pr-10">Order history &amp; Payments</h1>
</header>
<main class="flex-1 px-4 py-6">



<!-- Payment History Section -->
<section>
<header class="flex items-center justify-between pb-4">
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">Recent Transactions</h2>
<button class="text-accent text-sm font-bold">See All</button>
</header>
<!-- Filter Chips -->
<div class="flex gap-3 pb-5 overflow-x-auto">
<div class="flex h-9 shrink-0 cursor-pointer items-center justify-center gap-x-2 rounded-full bg-subtle-light dark:bg-subtle-dark px-4">
<p class="text-sm font-medium leading-normal">Purchases</p>
</div>
</div>
<!-- Transaction List -->
<div class="flex flex-col gap-3">
<!-- Transaction Item 1: Purchase -->
<div class="flex items-center gap-4 p-3 rounded-lg bg-subtle-light dark:bg-subtle-dark">
<div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-danger/10 text-danger">
<span class="material-symbols-outlined">shopping_bag</span>
</div>
<div class="flex-grow">
<p class="font-bold text-text-light dark:text-text-dark">Purchase - Order #TAA1024</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Oct 26, 2023</p>
</div>
<p class="text-base font-bold text-danger">- $45.50</p>
</div>
<!-- Transaction Item 2: Top-up -->
<div class="flex items-center gap-4 p-3 rounded-lg bg-subtle-light dark:bg-subtle-dark">
<div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-success/10 text-success">
<span class="material-symbols-outlined">account_balance_wallet</span>
</div>
<div class="flex-grow">
<p class="font-bold text-text-light dark:text-text-dark">Wallet Top-up</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Oct 25, 2023</p>
</div>
<p class="text-base font-bold text-success">+ $100.00</p>
</div>
<!-- Transaction Item 3: Purchase -->
<div class="flex items-center gap-4 p-3 rounded-lg bg-subtle-light dark:bg-subtle-dark">
<div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-danger/10 text-danger">
<span class="material-symbols-outlined">shopping_bag</span>
</div>
<div class="flex-grow">
<p class="font-bold text-text-light dark:text-text-dark">Purchase - Order #TAA1021</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Oct 24, 2023</p>
</div>
<p class="text-base font-bold text-danger">- $23.25</p>
</div>
<!-- Transaction Item 4: Withdrawal -->
<div class="flex items-center gap-4 p-3 rounded-lg bg-subtle-light dark:bg-subtle-dark">
<div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-danger/10 text-danger">
<span class="material-symbols-outlined">payments</span>
</div>
<div class="flex-grow">
<p class="font-bold text-text-light dark:text-text-dark">Withdrawal</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Oct 22, 2023</p>
</div>
<p class="text-base font-bold text-danger">- $50.00</p>
</div>
</div>
</section>
</main>

</div>
</body></html>