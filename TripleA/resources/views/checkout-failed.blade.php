<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order Failed - Triple A Oven Dried Catfish</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1a4c42",
                        "background-light": "#f6f8f7",
                        "background-dark": "#141e1c",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
    body {
      /* min-height: max(884px, 100dvh); */
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-neutral-900 dark:text-white font-display antialiased">
<div class="relative flex h-full min-h-screen w-full flex-col overflow-x-hidden">

<!-- Main Content Area -->
<main class="flex-1 flex flex-col items-center justify-center px-6 py-4 w-full max-w-md mx-auto">
<!-- EmptyState / Error Visualization -->
<div class="flex flex-col items-center gap-6 w-full mb-8">
<!-- Illustration -->
<div class="relative w-full aspect-square max-w-[280px] rounded-full bg-primary/5 dark:bg-primary/20 flex items-center justify-center mb-2">
<div class="absolute inset-0 rounded-full border border-primary/10 dark:border-primary/30"></div>
<!-- Using a background image that suggests premium food/packaging but with a focus on the 'issue' state implicitly by context or explicitly via overlay if needed. 
                         Here using a clear, premium catfish image with a subtle stylistic treatment. -->
<div class="bg-center bg-no-repeat bg-cover rounded-xl w-48 h-48 shadow-lg transform rotate-3" data-alt="Premium oven dried catfish packaging" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC8qEdBu4ygG58VFlhXgE7rLfFjlOkA-BTc_cp9PrM-Tmfl3MA4DDKhibzPdrVUbClVTLrs1E2rHjh5FU97vb8v9Zc20wgHNnDsYiOMXtdEdKscxsP9W5knv5-fLp0SVvNBioO_gbIMcGtdcscQPCbLVBRuxOCF4drF6qQUsbzhFhs97tcksICeXYl_82KmxxYGaS9k-tWUNAd1e2b8InKWBO1hcoL_PnKc44355Ka4MPUzucQsFARy4UY-hik2mMcHY-Nsnp_V5Tc");'>
</div>
<!-- Status Icon Badge -->
<div class="absolute -bottom-2 -right-2 bg-red-50 dark:bg-red-900/30 p-3 rounded-full border-4 border-background-light dark:border-background-dark shadow-sm">
<span class="material-symbols-outlined text-red-500 dark:text-red-400 text-3xl font-bold">error</span>
</div>
</div>
<!-- Text Content -->
<div class="flex flex-col items-center gap-3 text-center">
<h1 class="text-neutral-900 dark:text-white text-2xl font-bold leading-tight tracking-tight">
                        Payment Unsuccessful
  @if(session('error'))
            <p class="text-xl text-neutral-800 font-semi-bold"><strong>Reason:</strong> {{ session('error') }}</p>
        @else
            <p class="text-xl  font-thin text-neutral-700">Something went wrong with your payment. Don't worry, you haven't been charged.</p>
        @endif
</div>
</div>
<!-- Actions Stack -->
<div class="w-full flex flex-col gap-3 mt-auto mb-6">
<!-- Primary Action -->
<a href="{{route('contact')}}"<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-primary hover:bg-primary/90 transition-colors text-white text-base font-bold leading-normal tracking-wide shadow-md shadow-primary/20">
<span class="material-symbols-outlined mr-2 text-xl">phone</span>
<span class="truncate">Contact Support</span>
</button></a>
<!-- Secondary Action -->
<a href="{{route('cart')}}"<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-background-light dark:bg-white/5 border border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-white/10 transition-colors text-neutral-900 dark:text-white text-sm font-semibold leading-normal tracking-wide">
<span class="truncate"> Return to Cart</span>
</button></a>

</div>
</main>

</div>
</body></html>