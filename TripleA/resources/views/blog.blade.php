<!DOCTYPE html>

<html class="" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Blog / Recipes - Triple A Catfish</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<style>
      .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
      }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#1a4c42",
              "accent": "#D4AF37",
              "background-light": "#F8F5F2",
              "background-dark": "#10221e",
              "text-light": "#333333",
              "text-dark": "#EAEAEA",
              "chip-light": "#E9E5E1",
              "chip-dark": "#1F3A59",
            },
            fontFamily: {
              "display": ["Playfair Display", "serif"],
              "body": ["Inter", "sans-serif"],
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
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-body">
    <x-header />
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
    <h1 class="text-primary dark:text-accent md:text-3xl text-2xl font-display font-bold leading-tight tracking-[-0.015em] flex-1 text-center py-5 md:py-8">Blog &amp; Recipes</h1>

@foreach($blogs as $blog)
<!-- Featured Section -->
<section class="px-4">
  {{dd(Storage::disk('public')->url($blog->image))}}
<div class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-sm bg-white/50 dark:bg-black/20">
<div class="w-full bg-center bg-no-repeat aspect-[4/4] md:aspect-[4/1] bg-cover" data-alt="A delicious looking bowl of spicy catfish pepper soup, garnished with fresh herbs" style='background-image: url("");'></div>
<div class="flex w-full grow flex-col items-stretch justify-center gap-2 p-4">
<h3 class="text-primary dark:text-accent text-xl font-bold leading-tight tracking-[-0.015em] font-display">{{$blog->topic}}</h3>
<p class="text-text-light/80 dark:text-text-dark/80 text-sm font-normal leading-relaxed font-body">{{$blog->description}}</p>
<div class="flex items-center gap-4 mt-2 text-text-light/60 dark:text-text-dark/60">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-base">timer</span>
<p class="text-xs font-medium font-body">30 MINS</p>
</div>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-base">local_dining</span>
<p class="text-xs font-medium font-body">EASY</p>
</div>
</div>
</div>
</div>
</section>
@endforeach
</div>
<x-footer />
</body></html>