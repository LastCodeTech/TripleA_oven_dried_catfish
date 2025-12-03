<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact Page - Get in Touch</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#006400",
            "secondary": "#FFD700",
            "background-light": "#f6f8f8",
            "background-dark": "#10221e",
            "text-light": "#333333",
            "text-dark": "#F5F5F5",
            "card-light": "#FFFFFF",
            "card-dark": "#182c28",
            "border-light": "#e5e5e5",
            "border-dark": "#3a4a46"
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<x-header />
    <div class="relative min-h-screen w-full flex-col">
<main class="flex flex-col gap-6 p-4 pb-28">
<!-- Hero Section -->
<section class="text-center">
<h2 class="text-3xl font-bold tracking-tight text-text-light dark:text-text-dark">Contact Us</h2>
<p class="mt-2 text-base text-text-light/80 dark:text-text-dark/80">We're here to help. Reach out with any questions.</p>
@if (session()->has('message'))
    <h1 class="text-sm md:text-md py-2 capitalize text-green-600">{{session('message')}}</h1>
@endif
@if (session()->has('error'))
    <h1 class="text-sm md:text-md py-2 capitalize text-red-600">{{session('message')}}</h1>
@endif
</section>
<!-- Contact Form -->
<section class="rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark p-4 md:mx-[10rem] shadow-sm">
<form action="contactmsg.process" method="POST">
@csrf
<h3 class="px-2 pb-4 text-xl font-bold leading-tight tracking-tight">Send us a Message</h3>
<div class="flex flex-col gap-4">
<h1>Dear {{Auth::user()->name}}, thank you for reaching out.</h1>
<p>Please provide us with necessary information below, and our customer support team will attend to your request promptly.</p>

<label class="flex flex-col">
<p class="pb-2 text-sm font-medium">Phone Number</p>
<input value="{{old('message')}}" name='number' class="form-input h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-background-light p-3 text-base placeholder:text-text-light/50 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-text-dark/50" placeholder="input your phone number" type="tel"/>
@error('number')
    <h1 class="text-sm md:text-md py-2 capitalize text-red-600">{{$message}}</h1>
@enderror
</label>
<label class="flex flex-col">
<p class="pb-2 text-sm font-medium">Subject</p>
<input value="{{old('message')}}" name='subject' class="form-input h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-background-light p-3 text-base placeholder:text-text-light/50 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-text-dark/50" placeholder="e.g., Question about my order" type="text"/>
@error('message')
    <h1 class="text-sm md:text-md py-2 capitalize text-red-600">{{$message}}</h1>
@enderror
</label>
<label class="flex flex-col">
<p class="pb-2 text-sm font-medium">Your Message</p>
<textarea name='message' value='{{old('message')}}' class="form-textarea w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-background-light p-3 text-base placeholder:text-text-light/50 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-text-dark/50" placeholder="Type your message here..." rows="5"></textarea>
@error('message')
    <h1 class="text-sm md:text-md py-2 capitalize text-red-600">{{$message}}</h1>
@enderror
</label>
<input type='submit' value='submit message'  class="flex h-12 w-full items-center justify-center rounded-lg bg-[#1a4c42] text-base font-bold text-white transition-opacity hover:opacity-90" />
</div></form>
</section>
<!-- Quick Contact Section -->
<section class="rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark p-4 shadow-sm">
<h3 class="px-2 pb-4 text-xl font-bold leading-tight tracking-tight">Need a faster response?</h3>
<div class="flex flex-col md:flex-row gap-4">
<a class="flex h-12 w-full items-center justify-center gap-3 rounded-lg bg-[#25D366] text-base font-bold text-white transition-opacity hover:opacity-90" href="#">
<svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.55C8.75 21.33 10.37 21.8 12.04 21.8C17.5 21.8 21.95 17.35 21.95 11.9C21.95 9.27 20.92 6.83 19.16 4.99C17.4 3.16 14.87 2 12.04 2ZM12.04 20.15C10.56 20.15 9.12 19.74 7.89 18.96L7.54 18.75L4.41 19.61L5.29 16.57L5.07 16.22C4.21 14.88 3.78 13.34 3.78 11.91C3.78 7.37 7.51 3.64 12.04 3.64C14.28 3.64 16.33 4.52 17.89 6.08C19.45 7.64 20.3 9.69 20.3 11.91C20.3 16.45 16.57 20.15 12.04 20.15ZM16.56 14.45C16.31 14.32 15.11 13.75 14.89 13.67C14.67 13.59 14.52 13.54 14.36 13.79C14.21 14.04 13.74 14.6 13.59 14.75C13.44 14.9 13.29 14.93 13.04 14.8C12.79 14.68 11.97 14.39 10.97 13.49C10.21 12.82 9.69 12.01 9.57 11.76C9.44 11.51 9.56 11.39 9.69 11.26C9.8 11.16 9.95 10.95 10.1 10.8C10.25 10.65 10.3 10.52 10.4 10.37C10.5 10.22 10.45 10.1 10.37 9.95C10.3 9.8 9.8 8.73 9.63 8.28C9.46 7.83 9.28 7.88 9.16 7.88C9.04 7.88 8.89 7.88 8.74 7.88C8.59 7.88 8.34 7.93 8.14 8.13C7.93 8.33 7.41 8.81 7.41 9.9C7.41 11 8.16 12.05 8.29 12.2C8.41 12.35 9.76 14.55 11.81 15.4C13.86 16.25 13.86 15.89 14.09 15.84C14.31 15.79 15.31 15.22 15.51 14.97C15.71 14.72 15.71 14.52 15.66 14.45H16.56Z"></path></svg>
<span>Chat on WhatsApp</span>
</a>
<a class="flex h-12 w-full items-center justify-center gap-3 rounded-lg border border-border-light bg-transparent text-text-light transition-colors hover:bg-background-light dark:border-border-dark dark:text-text-dark dark:hover:bg-background-dark" href="tel:+1234567890">
<span class="material-symbols-outlined text-[#1a4c42]">phone</span>
<span class="font-semibold">(123) 456-7890</span>
</a>
<a class="flex h-12 w-full items-center justify-center gap-3 rounded-lg border border-border-light bg-transparent text-text-light transition-colors hover:bg-background-light dark:border-border-dark dark:text-text-dark dark:hover:bg-background-dark" href="mailto:contact@aaa-catfish.com">
<span class="material-symbols-outlined text-[#1a4c42]">email</span>
<span class="font-semibold">contact@aaa-catfish.com</span>
</a>
</div>
</section>
<!-- Location Section -->
<section class="rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark p-4 shadow-sm">
<h3 class="px-2 pb-4 text-xl font-bold leading-tight tracking-tight">Find Us</h3>
<div class="aspect-video w-full overflow-hidden rounded-lg">
<img alt="Map showing business location" class="h-full w-full object-cover" data-location="City, Country" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8c_AfxppLoIgUPQZMv4jmryAiWk_bke3ZvtRq4XlwAZLOGPNAW0jQ7KZ2ta8sBVz_6qaJOSELWjo_mXT6rvPhwp6Z7YLcRv6RQvqli6YEi5DvsFPNxqwtDI2eH5NMyp-Gehevlw5fp8yKh65u9wM30PP-WucNARjFI-4Y91VKyk65h8sDLMAP2jYEKYK5EPMYBthg-ZNzTxYJ8Od2HZcUxigGjS9KNwqJoouJGM7kYtK6yYXbhGCoUDMrBAO87gPflgWUWUOKXzQ"/>
</div>
</section>
</main>
</div>
</body></html>