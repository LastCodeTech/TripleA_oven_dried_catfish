<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Shop Page - Catfish Products</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<script>
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
    .material-symbols-outlined.fill {
        font-variation-settings: 'FILL' 1;
    }
  </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display">
<x-header />
<div class="relative flex min-h-screen w-full flex-col bg-background-light dark:bg-background-dark z-1">
<main class="flex-1 pb-24">
<!-- Headline Text -->
<div class="px-4 pt-6 pb-4">
<h2 class="text-3xl font-bold tracking-tight text-black dark:text-white">Oven Dried Catfish</h2>
<p class="mt-1 text-base text-gray-600 dark:text-gray-400">Premium quality, fresh and hygienic.</p>
</div>
<!-- Chips / Filters -->
<div class="sticky top-[61px] z-10 flex gap-3 overflow-x-auto bg-background-light/80 px-4 pb-3 pt-2 backdrop-blur-sm dark:bg-background-dark/80">
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary/20 px-4 text-black dark:text-white dark:bg-primary/30">
<p class="text-sm font-medium">Weight</p>
<span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary/20 px-4 text-black dark:text-white dark:bg-primary/30">
<p class="text-sm font-medium">Price</p>
<span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary/20 px-4 text-black dark:text-white dark:bg-primary/30">
<p class="text-sm font-medium">Category</p>
<span class="material-symbols-outlined text-lg">expand_more</span>
</button>
</div>
<!-- Image Grid -->
<div class="grid grid-cols-2 gap-4 p-4">
<div data-trig="fade-up" class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Close-up of a smoked catfish fillet on a wooden board." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDIc2V7JjABR6XrCf9h4N8ulHiQj74JkcJFjX4ECq4BmMqgcPB-96Kin-RbetuygtyxKFHyanmvZ7cYLzgIEzsdm4rngJ-oiymRQs_DqJqPe_X8xktxU2aoLv4AbwGf7Cr_DfftHp-7MvCxhlWMAkF9tCuEoMLu_NGaiokkGNRlO0mIS8isF-cK4tC3UXauqeiOVvnCJD2EC_yp4VZsqEpGs9GPbnodf7QDDz1wXh8ixY8hDSgqQCNUiT6VVGsV5q4fhdffl3CGziI");'></div>
<div>
<p class="font-medium text-black dark:text-white">Smoked Catfish Fillet</p>
<p class="text-sm text-gray-500 dark:text-gray-400">250g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$15.99</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Two whole dried catfish arranged neatly." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAeRba9fSGtPHlhSoJiW3-nlLfCVYd8kEuv35KrQGBjz4Bs8G_h-QIg8WO0fGW_Kvr0wL2Pyh5px19kwpBj3RBQ6-QZlGhJcV3Ow0zhsMxAPPkphS7LUlSoj_dcnYBxmyEtpyfXEmfOIQ5CX5389vPiWd9lbE55IxujU-3IwMHE_bd8_nZRitFyBY-X1WMDMRXXHmUxu8s9-ipamZD4_gIVQSf3YX3lrodt9TWNT1scPkMdGS5y-17IepZKj9my1Lj71nzV3dTXEVg");'></div>
<div>
<p class="font-medium text-black dark:text-white">Whole Dried Catfish</p>
<p class="text-sm text-gray-500 dark:text-gray-400">500g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$25.99</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Dried catfish seasoned with red spicy peppers." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCiXOEHU2i5PjDdhbvsnDnCkfySJ2XY9Rz2G9RClSgzZCI4K9msmb-YAEqhd5GOMW9uVj-UyORuXod_Odq3tyYNwytV_J0BcE66Vq5Gq1YqcpBEbGQETGm_lzMYHBjFdduPVy8mM6OTv9TvYhmde6xzCsuVNiAvHMqhji9y2utsko-By_qesgdWq0D6S3GkUGa90GQolQEh8kU3_rrNtW1DxLFda0DNg0V-HEvk-M5fuNo_92TMQj_kfBjtIfybnlgSp1brHz-hgxs");'></div>
<div>
<p class="font-medium text-black dark:text-white">Spicy Smoked Catfish</p>
<p class="text-sm text-gray-500 dark:text-gray-400">250g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$16.99</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Neatly cut catfish steak portions ready for drying." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPEz1kwgRMmvPFh-MscKjtxDpjvluSoJ53_rdPazGatTOLD79SAPWYFbzbc6uhzbkcbppfRNcrQQV07iFXSjJjRihDJPs4IvgK0jiRbx77vrqSuXBkkUQoQcqK4XKAV05qxJyfubkdu1otiUQByjTTamRWiKJVhJsB5MEwSWxmoTQhsWStyqTAPEtIBJXm4ZGdNCdkoeYLxK4JZvY7bNSA1g6m7aufyq4H1SxEOY2ApVptiKZalaekvi1n1HeLqNJs-q6e2o2Wmo4");'></div>
<div>
<p class="font-medium text-black dark:text-white">Catfish Steak Cuts</p>
<p class="text-sm text-gray-500 dark:text-gray-400">400g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$22.99</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="A batch of oven-dried catfish pieces in a bowl." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC62ZQNqFSBIZCPVMoXvrG4H5thTPQQKaLC0eNDKgUqrkB6q2kOVfUOzg7rkZKWlhZNLh8f9BYjnPu58gpWoTmw_6MD6ZNUnwZVxxT8DYfSxIiLRkagEkXrMWnTNe7x-JL2RJkNWYMbz9vBLW_bf5-Mf6BOiinfswGohSoODWXEjUtHI6CkIatBl1E49ugs0UjHJxRnDATYozJladx2GFvALt4zLC2B_AEGfHhscyChcQjopwL0FVTzAGpEgmiVgVcGBZxfRKETAjo");'></div>
<div>
<p class="font-medium text-black dark:text-white">Catfish Bites</p>
<p class="text-sm text-gray-500 dark:text-gray-400">300g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$18.49</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Large single piece of whole oven-dried catfish." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRGn87qU3-HlcXCbA3bVcag7qQcst2Rew2g0TQ_f2V-wcUCizDdh9LRt3aq5Ej9iCCUFkJN8njYOy2E3wBaS7SzqNXl9xNAvZT8N0aKEzh_msaN3E6SI24IX2O6WfDlP3kHAu_9sbRALWdhH2YKjfRk7CtOULUaleQqprrXDT-9COiXl2iZE1RBRR2XfyOyO3ItEyMN1hp2GKMSt7Wo30hyUTgmtu8Z-ortcU2dfDdvuvBeJj8cZZIHSJjOCS_I4TIzeZYpjJH19E");'></div>
<div>
<p class="font-medium text-black dark:text-white">Jumbo Dried Catfish</p>
<p class="text-sm text-gray-500 dark:text-gray-400">750g</p>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">$35.00</p>
<button class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white">
<span class="material-symbols-outlined text-xl">add</span>
</button>
</div>
</div>
</div>
</div>
</main>

</div>

  <script src="https://cdn.jsdelivr.net/gh/sh4hids/trigjs/dist/trig.min.js">
  Trig.init();
   alert('hello');
    </script>

</body></html>