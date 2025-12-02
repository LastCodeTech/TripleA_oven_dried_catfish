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
    <h1 class="text-primary dark:text-accent text-xl font-display font-bold leading-tight tracking-[-0.015em] flex-1 text-center py-3">Blog &amp; Recipes</h1>
<!-- Search Bar -->
<div class="px-4 py-3">
<label class="flex flex-col min-w-40 h-12 w-full">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-primary dark:text-accent flex border-none bg-chip-light dark:bg-chip-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border-none bg-chip-light dark:bg-chip-dark focus:border-none h-full placeholder:text-primary/70 dark:placeholder:text-accent/70 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal font-body" placeholder="Search for recipes or articles..." value=""/>
</div>
</label>
</div>
<!-- Chips / Filters -->
<div class="flex gap-3 px-4 py-2 overflow-x-auto whitespace-nowrap">
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary text-background-light dark:bg-accent dark:text-primary px-5">
<p class="text-sm font-medium leading-normal font-body">All</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-chip-light dark:bg-chip-dark text-text-light dark:text-text-dark px-5">
<p class="text-sm font-medium leading-normal font-body">Recipes</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-chip-light dark:bg-chip-dark text-text-light dark:text-text-dark px-5">
<p class="text-sm font-medium leading-normal font-body">Health</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-chip-light dark:bg-chip-dark text-text-light dark:text-text-dark px-5">
<p class="text-sm font-medium leading-normal font-body">Tips</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-chip-light dark:bg-chip-dark text-text-light dark:text-text-dark px-5">
<p class="text-sm font-medium leading-normal font-body">Stories</p>
</button>
</div>
<!-- Featured Section -->
<section class="px-4">
<h2 class="text-primary dark:text-accent tracking-light text-2xl font-bold leading-tight font-display text-left pb-3 pt-5">Featured Post</h2>
<div class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-sm bg-white/50 dark:bg-black/20">
<div class="w-full bg-center bg-no-repeat aspect-[4/4] md:aspect-[4/1] bg-cover" data-alt="A delicious looking bowl of spicy catfish pepper soup, garnished with fresh herbs" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCGALxsMZY2uu_rW3vTFuT6OPFek174lymOsWpFtXTXYrbgjYHl7ZErLoz6sDnJDRKa45Xw50RjHpYzmQh5aHGlga0PpLtWUAKiVX3qJoq4m-yxcFpESzOYvsSRq2m-9mBMVJweTHpPik_F34VxesOE61aFUMF2OJmwIf7s2w7tRQ2Mrv5ixh5ted0YH4wECz4IsN3si_GmQMbP0Ir9E9gSHrL66Y9-T8RR6p1w-KuI_ppkTfoGnkAxYjr53scisHZ0DkI4LGbxKqQ");'></div>
<div class="flex w-full grow flex-col items-stretch justify-center gap-2 p-4">
<h3 class="text-primary dark:text-accent text-xl font-bold leading-tight tracking-[-0.015em] font-display">Spicy Catfish Pepper Soup</h3>
<p class="text-text-light/80 dark:text-text-dark/80 text-sm font-normal leading-relaxed font-body">Discover the rich flavors of our signature pepper soup, a perfect blend of heat and tradition.</p>
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
<!-- All Articles Section -->
<section class="px-4 mt-6">
<h2 class="text-primary dark:text-accent tracking-light text-2xl font-bold leading-tight font-display text-left pb-3 pt-5">All Articles</h2>
<!-- Article Card 1 -->
<div class="flex flex-row items-center justify-start rounded-xl overflow-hidden my-4 bg-white/50 dark:bg-black/20">
<div class="w-28 h-28 shrink-0 bg-center bg-no-repeat bg-cover" data-alt="A vibrant catfish stir-fry in a wok with colorful vegetables" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDN2IaCnIHOty7sdNgGEH7zCBVheEnkDmRnMJWWo7_SbMYOu5oCbIwZtXgYs3hGpj4TC26HtIZlsUHiGGaAvpEOgoRlgGHlMj0Iqvv-KcBkwjc5Ul6w86yNjsgNf4Cytx0ttGUr_7Pfoh2GJgwU-h8XSh0kA-dK7Cjdakz8OWKHHk3FAHHZ88NDgz6cOG2ZeDnfg9aQbx_1R-QtJ-YyEhWVKcORnAgVoK50Vccq81rhN4osXWZGtNLSBWW_FqhV7bqLk5FdloiEUDo");'></div>
<div class="flex w-full grow flex-col items-stretch justify-center gap-1 p-4">
<h3 class="text-primary dark:text-accent text-lg font-bold leading-tight font-display">Quick &amp; Easy Catfish Stir-Fry</h3>
<p class="text-text-light/80 dark:text-text-dark/80 text-xs font-normal leading-normal font-body">A perfect weeknight meal that's both healthy and delicious.</p>
<p class="text-text-light/60 dark:text-text-dark/60 text-xs font-normal leading-normal mt-1 font-body">15 MINS - EASY</p>
</div>
</div>
<!-- Article Card 2 -->
<div class="flex flex-row items-center justify-start rounded-xl overflow-hidden my-4 bg-white/50 dark:bg-black/20">
<div class="w-28 h-28 shrink-0 bg-center bg-no-repeat bg-cover" data-alt="Close up of perfectly oven-dried catfish pieces on a drying rack" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASCY9IVEu4Tk20Zq17qwHqr3Aej8WYhD4sPSnHzoeBcTT5H56vRuwTKOSc2qzAAxDCSWl--pjCV7RC0SqkbPijpcE-M67SIjERdqpLeAV5Ns32Pa6pKQyzcF8OK-oMz6DrgQPG1VrDDpR8QGW5lyflXzeiySNW7aaemIGbZSMVlD_GoRMeB4AvcmAfkqe0lx87v8NdGr9CQMAqYtVxONflyJtk1sB2J7qNPuRfK1wk9Utd75JpwznUcZ_9T44_KwCGxdTm5hMPYr8");'></div>
<div class="flex w-full grow flex-col items-stretch justify-center gap-1 p-4">
<h3 class="text-primary dark:text-accent text-lg font-bold leading-tight font-display">Why Oven-Dried is Better</h3>
<p class="text-text-light/80 dark:text-text-dark/80 text-xs font-normal leading-normal font-body">Learn about the health and taste benefits of our unique drying process.</p>
<p class="text-text-light/60 dark:text-text-dark/60 text-xs font-normal leading-normal mt-1 font-body">5 MIN READ</p>
</div>
</div>
<!-- Article Card 3 -->
<div class="flex flex-row items-center justify-start rounded-xl overflow-hidden my-4 bg-white/50 dark:bg-black/20">
<div class="w-28 h-28 shrink-0 bg-center bg-no-repeat bg-cover" data-alt="A serene image of a sustainable fishing environment" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDD3XDqM3yw-nIneayP-pVYWcuW6jfKOwol08ao83CkL2ikMY94sCYKMHVISaUmBRKPEhy3wZxf-rfikmqUMjsvc9pgv6hlQidGyB3BgWFz6U1M868eKR48eE_yESgsDj_oIz824TNKHmzV4iXpowYbSkbxw3eoenNo_QPEkHt3E2VSKwcMhmwcqN91UbQjm02AEHDhkWREDjirloJyKiQKaAyLc3xcL1LIcDKkPM2NW5k1YHeZ4rFbPQDdcrsXzw_5JpaF2Nln93o");'></div>
<div class="flex w-full grow flex-col items-stretch justify-center gap-1 p-4">
<h3 class="text-primary dark:text-accent text-lg font-bold leading-tight font-display">Our Sustainable Sourcing Story</h3>
<p class="text-text-light/80 dark:text-text-dark/80 text-xs font-normal leading-normal font-body">From the water to your table, our commitment to quality and ethics.</p>
<p class="text-text-light/60 dark:text-text-dark/60 text-xs font-normal leading-normal mt-1 font-body">8 MIN READ</p>
</div>
</div>
</section>
<div class="h-24"></div> <!-- Spacer for bottom nav -->

</div>
</body></html>