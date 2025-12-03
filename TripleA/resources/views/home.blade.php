<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Triple A Oven Dried Catfish - Home Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&amp;family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#1a4c42", /* Deep Forest Green */
              "secondary": "#daa520", /* Warm Gold */
              "background-light": "#f6f8f7", /* Off-white */
              "background-dark": "#141e1c", /* Dark mode background */
              "accent": "#d2b48c", /* Light Wood Brown */
              "text-light": "#101817",
              "text-dark": "#eaf1ef",
              "text-muted-light": "#5c8a81",
              "text-muted-dark": "#a0b3b0"
            },
            fontFamily: {
              "display": ["Playfair Display", "serif"],
              "body": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
<body class="bg-background-light dark:bg-background-dark font-body">
  <x-header />
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<!-- Top App Bar -->

@if (session()->has('message'))
    <h2 class="text-base md:xl font-semibold capitalize text-red-600 pt-2">{{session('message')}}</h2>
@endif
<!-- Hero Section -->
<div class="@container">
<div class="@[480px]:p-4 p-0">
<div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4 text-center" data-alt="High-quality, appetizing shot of oven-dried catfish on a dark slate background" style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAR4zvV5oY38I1vR92rpF-5BlGy55AtM_VCOTlofl_kvEFkKwKQBeMj3v1t2tBxjMAlXZTKQbccSx44M9RVFyxhIbl7FDoBoqiRyK5I9aA0eOc7TnIAo1xUnjlQ7PHn2AdMtXrx4Jd_zjICf6HG8o9ec127K0aDxEf9-nIUZiAkMzcepMMUV-6cPCc-2GfaTeiH-oRRyP__nnqx-OdQcbM1mZr7sl7cQIFxoZqyfIRwAzkm9mkJio4NT-nooovmRWPjfdQrFN_bnTY");'>
<div class="flex flex-col gap-2">
<h1 class="text-white font-display text-4xl font-black leading-tight tracking-tight @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight">
                            Pure Taste. Zero Sand. 100% Hygienic.
                        </h1>
<h2 class="text-white/90 font-body text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                            Experience the premium difference with our perfectly prepared oven-dried catfish.
                        </h2>
</div>
<div class="flex-wrap gap-3 flex justify-center">
@auth
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-white font-body text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
<span class="truncate"><a href="{{route('shop')}}">Shop Now</a></span>
</button>
@endauth
@guest
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-white font-body text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
<span class="truncate"><a href="{{route('login')}}">Shop Now</a></span>
</button>
@endguest

</div>
</div>
</div>
</div>
<!-- Bestsellers Section -->
<h2 class="text-text-light dark:text-text-dark font-display text-3xl font-bold leading-tight px-4 pb-3 pt-8 md:text-center md:py-3">Our Bestsellers</h2>
<div class="flex  md:justify-evenly overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
<div class="flex items-stretch px-4 gap-4">
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white dark:bg-background-dark shadow-[0_2px_8px_rgba(0,0,0,0.05)] dark:border dark:border-white/10 min-w-60">
<div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-t-xl flex flex-col" data-alt="Packaging for 250g oven-dried catfish" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDXR35XIIgUju_RXPDFhwUsMvhqlGmu13sjpG9jMu6N6GzTSxz4DLGYT5gZiMmIF0PYeqQFL9tLeEKeiCo9kRfXPi3lczSnW0QCcLG_rxZnkIMHJf7VMl9ASabTCEd2RGgZH7rWHC5crJzCwEONcCRxED83YLsl-wMLALpp8uoOw15KD9F3w6H2EBS_OUOOFxZJ7_IoYbMi9cqz4gMlhRcGemmAKa5qVZxlG70sLhYAHBnvC86KlLp-Pli1N8va94MdPwpiZvlMXXA");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-text-light dark:text-text-dark font-body text-base font-medium leading-normal">Triple A Catfish - 250g</p>
<p class="text-text-muted-light dark:text-text-muted-dark font-body text-sm font-normal leading-normal">$15.00</p>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 dark:bg-white/10 text-primary dark:text-secondary font-body text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Add to Cart</span>
</button>
</div>
</div>
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white dark:bg-background-dark shadow-[0_2px_8px_rgba(0,0,0,0.05)] dark:border dark:border-white/10 min-w-60">
<div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-t-xl flex flex-col" data-alt="Packaging for 500g oven-dried catfish" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAK8OU-ojbGzblHrtkw-tgsYl3er9-2VhDhMmjrlNoaTe6OUe3Ha0N8hZ3R2yxoPwBDewgW-zshP_AzFB2FD_iYKuzygEeqbuwwlLqAgqca7LDFCjkNdkA8h8sX7wU8ZHHDmk9jKgSlapraVtV6uyRVH_JHVauE5As-cOUff4QMfk_2SqH5Dc3IkhLeZoLxIpEkgqVXpXYB776uD2Sgc5cc3lWxCsbvS4GcH7Wfha_XTTbiw8UpqgzRH32hMz6qxmeYCGBR6kYxsEE");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-text-light dark:text-text-dark font-body text-base font-medium leading-normal">Triple A Catfish - 500g</p>
<p class="text-text-muted-light dark:text-text-muted-dark font-body text-sm font-normal leading-normal">$28.00</p>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 dark:bg-white/10 text-primary dark:text-secondary font-body text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Add to Cart</span>
</button>
</div>
</div>
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white dark:bg-background-dark shadow-[0_2px_8px_rgba(0,0,0,0.05)] dark:border dark:border-white/10 min-w-60">
<div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-t-xl flex flex-col" data-alt="Packaging for 1kg oven-dried catfish" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDg9cFcsQliqjngeo7Opg5StrSCZQ92caiyGzhFUDa-lwiPpPYwY9PDIdbvJO1YvNVJgwGXmaZnPwWU39RTPrTUEUGMHR2KvqDvu2obBA4oZwj4P5eP-Pao7GgfRyc9-q6AZcB2aT5FnFmbXd7qOTewQy8nYQ7IGAxpSNiKYtGgeRJv3MnE7WbuUU28Nk7TaGHj_oYv7gpmp6py-3FhDeccxG55opHv1zNYlGPerrF20VJyI1SwwysYB8E0VZDW6mQ7bx_jmdj_ibk");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-text-light dark:text-text-dark font-body text-base font-medium leading-normal">Triple A Catfish - 1kg</p>
<p class="text-text-muted-light dark:text-text-muted-dark font-body text-sm font-normal leading-normal">$50.00</p>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 dark:bg-white/10 text-primary dark:text-secondary font-body text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Add to Cart</span>
</button>
</div>
</div>
</div>
</div>
<!-- Why Choose Us Section -->
<div class="p-4   mt-8">
<h2 class="text-center text-text-light dark:text-text-dark font-display text-3xl font-bold leading-tight text-center mb-6">The Triple A Difference</h2>
<div><div class="md:grid md:grid-cols-2  flex   flex-col gap-6">
<div class="md:border-4 md:border-[#1a4c42] md:bg-slate-200 md:py-7 md:px-8 md:rounded-xl flex items-center gap-4">
<div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-secondary/20 dark:text-secondary">
<span class="material-symbols-outlined">health_and_safety</span>
</div>
<div class="flex flex-col">
<h3 class="font-body text-base font-bold text-text-light dark:text-text-dark">100% Hygienic</h3>
<p class="font-body text-sm text-text-muted-light dark:text-text-muted-dark">Prepared in a spotless, certified facility.</p>
</div>
</div>
<div class="md:border-4 md:border-[#1a4c42] md:bg-slate-200 md:py-7 md:px-8 md:rounded-xl flex items-center gap-4">
<div class=" flex size-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-secondary/20 dark:text-secondary">
<span class="material-symbols-outlined">verified</span>
</div>
<div class="flex flex-col">
<h3 class="font-body text-base font-bold text-text-light dark:text-text-dark">Sand-Free Guarantee</h3>
<p class="font-body text-sm text-text-muted-light dark:text-text-muted-dark">Enjoy a pure, grit-free taste every time.</p>
</div>
</div>
<div class="md:border-4 md:border-[#1a4c42] md:bg-slate-200 md:py-7 md:px-8 md:rounded-xl flex items-center gap-4">
<div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-secondary/20 dark:text-secondary">
<span class="material-symbols-outlined">workspace_premium</span>
</div>
<div class="flex flex-col">
<h3 class="font-body text-base font-bold text-text-light dark:text-text-dark">Premium Quality</h3>
<p class="font-body text-sm text-text-muted-light dark:text-text-muted-dark">Only the best, hand-selected catfish make the cut.</p>
</div>
</div>
<div class="md:border-4 md:border-[#1a4c42] md:bg-slate-200 md:py-7 md:px-8 md:rounded-xl flex items-center gap-4">
<div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-secondary/20 dark:text-secondary">
<span class="material-symbols-outlined">eco</span>
</div>
<div class="flex flex-col">
<h3 class="font-body text-base font-bold text-text-light dark:text-text-dark">Fresh From the Farm</h3>
<p class="font-body text-sm text-text-muted-light dark:text-text-muted-dark">Sustainably sourced for unbeatable freshness.</p>
</div>
</div>
</div></div>
</div>
<!-- Testimonials Section -->
<h2 class="text-text-light dark:text-text-dark font-display text-3xl font-bold leading-tight px-4 pb-3 pt-8 text-center">What Our Customers Say</h2>
<div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
<div class="flex items-stretch p-4 gap-4">
<div class="flex h-full min-w-[280px] flex-1 flex-col gap-4 rounded-xl bg-accent/20 dark:bg-accent/10 p-5">
<div class="flex gap-1 text-secondary">
<span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span>
</div>
<p class="text-text-light dark:text-text-dark font-body text-base font-normal leading-relaxed">"The best dried catfish I've ever had. No sand, just pure flavor. It made my soup taste incredible!"</p>
<p class="text-text-muted-light dark:text-text-muted-dark font-body text-sm font-medium">— Funke A.</p>
</div>
<div class="flex h-full min-w-[280px] flex-1 flex-col gap-4 rounded-xl bg-accent/20 dark:bg-accent/10 p-5">
<div class="flex gap-1 text-secondary">
<span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span>
</div>
<p class="text-text-light dark:text-text-dark font-body text-base font-normal leading-relaxed">"I'm so impressed with the quality and hygiene. You can tell this is a premium product. Will definitely buy again."</p>
<p class="text-text-muted-light dark:text-text-muted-dark font-body text-sm font-medium">— Emeka O.</p>
</div>
</div>
</div>

<div class="bg-primary/20 dark:bg-primary/10 p-8 m-4 rounded-lg flex flex-col items-center text-center gap-4">
<h3 class="text-xl font-bold">Join Our Newsletter</h3>
<p class="text-gray-600 dark:text-gray-300">Get exclusive offers and updates delivered straight to your inbox.</p>
<div class="flex w-full max-w-sm flex-col gap-2 sm:flex-row">
<input class="w-full rounded-lg border-gray-300 bg-background-light px-4 py-2 text-background-dark shadow-sm focus:border-primary focus:ring-primary dark:border-primary/30 dark:bg-background-dark dark:text-white" placeholder="Enter your email" type="email"/>
<button class="flex shrink-0 items-center justify-center rounded-lg bg-primary px-5 py-2.5 font-bold text-white">Subscribe</button>
</div>
</div>
<!-- Footer -->
<div class="bg-primary/90 dark:bg-black/20 mt-12 p-8 text-center text-white">
<div class="flex flex-col gap-6">
<div class="flex justify-center gap-6">
<a class="font-body text-sm" href="#">FAQ</a>
<a class="font-body text-sm" href="#">Shipping</a>
<a class="font-body text-sm" href="#">Contact Us</a>
</div>
<div class="flex justify-center gap-4">
<img alt="Instagram logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDD_6ZNJz8i9AX1L2k0Hep0VnVo_K3h0EINBIM-sYrjYq7wR96UBVDTnhZkVOov12iRUb4AVflB0noleV1NjY4bsxM08W43mD_mT_COj6ig9n6qp4zjmjp0I3hmAq9yP6MTeAsuBq3mua8pL-UaRPJ8DV8kEKNITjiaCExaTLMFxsd4HH5KGaETyFuHH3OQRSvNPis8VdBgtGoRBsRHFcvhTtSInBkKBdsdVCzNOQ4F0LboQYPzAx8K8dpoMhdC_4dQspWmOnqRDJY"/>
<img alt="Facebook logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmNg0BZvqxwY1pxbOEbplStlJAWjZklKCNJyRM3omSB4aKF_H3lmQjmwNmYrf2howf2cRH19W6nT-2i-XMR4XDqjVlx_uQn8hOb4TlGyXhk17K3SA_GkwaixNlNj7pIDXE2nOEPotmM60j1iqngGhVyL1HxybZKXyU52IAZo4vY7RIY1Xw_CwprJcXLNka0krXehTWT0tgD2Vk4RZig_dHavbwDwcufc87j6B5XCivbSgLUla9W26vM51e-3m2VepC1PNTvqgZlyM"/>
<img alt="X logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8Jebn9m-86WfMBW16zl1KLO0XEUVe4dBWo8SOFDngNsyQ50BWLKyoXe0D_9NL_9ljCx9JnsVVwscIqyINhWBPnTzAjks3XXNSuxRIelnQ_u_CwOB93RJV-4S8It_m9q25R87FxGn_3DFzKWDpeVZ_ibpC6QSxz8JjrDsh_37zfzCxG9Fkolxlro4C4s-5c9dB9r76YatfKM68CZ_UOTBQu_sVCfxaqZlps9neNr8WmdlWyAHy3IJ5dIXx9ARhOiHjET5Idksv284"/>
</div>
<p class="text-white/70 font-body text-xs">© 2024 Triple A Catfish. All Rights Reserved.</p>
</div>
</div>
</div>
</body></html>