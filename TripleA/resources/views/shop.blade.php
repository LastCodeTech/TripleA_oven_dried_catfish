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
<div class="px-4 pt-6 pb-4 text-center">
<h2 class="text-3xl font-bold tracking-tight text-black dark:text-white">Oven Dried Catfish</h2>
<p class="mt-1 text-base text-gray-600 dark:text-gray-400">Premium quality, fresh and hygienic.</p>
{{-- toast --}}
<x-toast />

</div>

<!-- Image Grid -->
<div class="grid md:grid-cols-3 grid-cols-2 gap-4 p-4">
@foreach ($products as $product)
    <div class="flex flex-col gap-2 rounded-xl bg-white p-3 shadow-sm dark:bg-gray-800">
<div class="aspect-[3/4] w-full rounded-lg bg-cover bg-center bg-no-repeat" data-alt="Large single piece of whole oven-dried catfish." style='background-image: url("{{Storage::disk('public')->url($product->image)}}");'></div>
<div class="md:px-8">
<div class="block text-center capitalize md:flex md:justify-between ">
  <p class="font-medium text-black dark:text-white">{{$product->name}}</p>
<p class="text-md text-gray-500 dark:text-gray-400 uppercase">{{$product->size}}</p></div>
<div class="mt-2 flex items-center justify-between">
<p class="text-base font-bold text-black dark:text-white">&#x20A6;{{number_format($product->price,2)}}</p>
<form method="post" action="{{route('cart.add')}}">
  @csrf
  <input class="hidden" name="product_id" value="{{ $product->id }}">
  <input type='submit' class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white"
value='+'
/></form>
</div>
</div>
</div>
@endforeach
</div>
</main>
<x-footer />
</div>



</body></html>