<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Triple A Oven-Dried Catfish - Gallery</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Montserrat:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
    }
    .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    }
    @media (min-width: 400px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
    }
  </style>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#D4AF37",
            "deep-brown": "#4A2E2A",
            "cream-white": "#F5F5DC",
            "rich-black": "#1A1A1A",
            "background-light": "#F5F5DC",
            "background-dark": "#1A1A1A",
          },
          fontFamily: {
            "display": ["Montserrat", "sans-serif"],
            "serif": ["Playfair Display", "serif"]
          },
          borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
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
<body class="bg-slate-100 font-display text-deep-brown dark:text-cream-white">
    <x-header />
<div class="relative flex min-h-screen w-full flex-col bg-slate-100">
<main class="flex-1 px-4 py-6">
<div class="text-center">
<h2 class="font-serif text-3xl font-bold leading-tight tracking-tight text-[#1a4c42]">A Glimpse Into Our Process</h2>
<p class="pt-2 text-base font-normal leading-normal text-[#1a4c42]">From fresh catch to perfectly dried, see the care we put into every batch.</p>
</div>
<div  class="gallery-grid grid gap-3 pt-8 sm:gap-4">
<div class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('image-3715e4905d2149e38d4f40445d3129f1', 'Catfish drying in a modern, clean oven')">
<img alt="Catfish drying in a modern, clean oven" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/catfish image5.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">The Drying Process</p>
</div>
</div>
<div  class="group relative col-span-2 cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuBqd3lzn1L_Qh6xMEeJYToHeCT2MlGBvcntbu9TBpa8rbLi408FSQ0XOive-9jqyvp417VyB_KUX3usjuoYe4SKZOP5xWvaOHbw1jGcni41OdbMn69hvE8cAHTTTt1rIDdhQYKE8ysyPdeiONlQejJ0YWKM2hCVwe8thf4lMUiECTl84K4lL6agf1iPPhU9NM7Sv0ZwY9UGAX_lag8fcVaYrS8sLzY1SWRqInlw2qz5IppwZrnaFa-9yP3pK4MUHpS0mAzyRxm3_Sqk', 'Close-up of a perfectly smoked and spiced oven-dried catfish, ready for packaging')">
<img alt="Close-up of a perfectly smoked and spiced oven-dried catfish, ready for packaging" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/catfish image7.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">Packaged &amp; Ready</p>
</div>
</div>
<div class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('image-4c6e919b5d384ac980907e2a96a583e7', 'Fresh, raw catfish prepared for the oven')">
<img alt="Fresh, raw catfish prepared for the oven" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/catfish image9.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">Before Processing</p>
</div>
</div>
<div class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('image-7848c7d3a0424564b73b22b7245749f7', 'State-of-the-art oven used for drying catfish')">
<img alt="State-of-the-art oven used for drying catfish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/oven1.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">Our Oven</p>
</div>
</div>
<div class="group relative col-span-2 cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('image-9f237191147047f3b33454743b006cf0', 'Large bulk order of packaged oven-dried catfish')">
<img alt="Large bulk order of packaged oven-dried catfish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/catfish image15.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">Bulk Orders</p>
</div>
</div>
<div class="group relative col-span-2 cursor-pointer overflow-hidden rounded-lg shadow-md transition-shadow hover:shadow-xl" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuDrHYZjDGNQrBNneb8q2K-ucB8uql81qZQiDU9gX3vqfSlvL507k-uDSUaawY9InzWud9G6lE5uOLmxsUWeGd1DUBrv2yVrfB4x6kz5l0owIOViIVipyarxSS8lCYv_9__bsgTO6tN0dq7qIRq-Cjznu-ypuS0dtzZhlvi0icRWPd2nugkpssisjo_dA0mqToS4LkqnC3lVg7yLSiC4G6q986ifz3SiQf9dLLIX4VFf12XnVo1PAWNUGU_lIZvkNMD1lOqDzyciIp8V', 'Beautifully golden-brown oven-dried catfish after processing')">
<img alt="Beautifully golden-brown oven-dried catfish after processing" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/catfish image4.jpg')}}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-3">
<p class="text-sm font-semibold text-white">After Processing</p>
</div>
</div>
</div>
</main>
<x-footer />
</div>
<script>
  function openLightbox(src, alt) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-img').alt = alt;
    document.getElementById('lightbox').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  document.getElementById('lightbox').addEventListener('click', function() {
    this.classList.add('hidden');
    document.body.style.overflow = 'auto';
  });

 

</script>

</body></html>