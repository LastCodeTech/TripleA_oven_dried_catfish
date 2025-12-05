<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login Page - Triple A Account</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;family=Playfair+Display:wght@700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1a4c42",
                        "accent": "#c4a358", // Warm Gold
                        "background-light": "#f6f8f7",
                        "background-dark": "#141e1c",
                        "text-light": "#101817",
                        "text-dark": "#e0e2e1",
                        "text-muted-light": "#5c8a81",
                        "text-muted-dark": "#a0b4b0",
                        "border-light": "#d4e2e0",
                        "border-dark": "#4a5452",
                    },
                    fontFamily: {
                        "display": ["Playfair Display", "serif"],
                        "sans": ["Inter", "sans-serif"]
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<style>
    body {
      /* min-height: max(884px, 100dvh); */
    }
  </style>
  </head>
<body class="font-sans">
<div class="relative flex min-h-screen w-full flex-col items-center bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<div class="flex w-full max-w-md flex-1 flex-col justify-center px-6 ">
<!-- Logo Container -->
<div class="flex justify-center pb-1">
<div class="text-center gap-2 text-2xl md:text-5xl ">
{{-- <i class="fa-solid fa-fish-fins fa-bounce text-primary dark:text-accent "></i>
<h2 class="font-display font-bold tracking-wide text-text-light dark:text-text-dark">Triple A Oven Dried Catfish</h2> --}}
<img src="{{asset('images/logo.png')}}" class="h-[150px] w-[170px]">
</div>
</div>
<!-- Headline Text -->
<div class="pb-8 text-center">
<h1 class="text-text-light dark:text-text-dark font-display tracking-tight text-2xl md:text-4xl font-thin leading-tight  ">Welcome Back</h1>
@if (session()->has('message'))
    <h2 class="text-base md:xl font-semibold capitalize text-red-600 pt-2">{{session('message')}}</h2>
@endif
</div>
<!-- Form Container -->
<form action="{{route('login.process')}}" method="POST">
    @csrf
<div class="w-full">
<!-- Email TextField -->
<div class="flex w-full flex-wrap items-end gap-4 pb-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Email Address</p>
<input name='email' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Enter your email address" type="email" value="{{old('email')}}"/>
@error('email')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror
</label>
</div>
<!-- Password TextField -->
<div class="flex w-full flex-wrap items-end gap-4 pb-2">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Password</p>
<div class="relative flex w-full flex-1 items-stretch">
<input name='password' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] pr-12 text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Enter your password" type="password" value=""/>
<button aria-label="Toggle password visibility" class="text-text-muted-light dark:text-text-muted-dark absolute inset-y-0 right-0 flex items-center pr-4">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
@error('password')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror

</label>
</div>
<!-- Forgot Password Link -->
<div class="w-full text-right">
<a class="text-primary dark:text-accent text-sm font-medium leading-normal underline" href="#">Forgot Password?</a>
</div>
</div>

<!-- Spacer -->
<div class="h-8"></div>
<!-- Primary Button (CTA) -->
<div class="flex w-full flex-col items-center gap-4 px-0 py-3">
<input value="Log In" type="submit" class="flex h-14 w-full items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-primary px-5 py-3 text-base font-semibold leading-7 text-white shadow-sm transition-transform duration-200 ease-in-out hover:scale-[1.02] active:scale-[0.98]"/>
</div></form>

<!-- Social Login Buttons -->
<!-- Sign Up Prompt -->
<div class="text-center">
<p class="text-text-light dark:text-text-dark text-base font-normal">
                    New to Triple A? <a class="font-bold text-primary dark:text-accent underline" href="{{route('signup')}}">Sign Up</a>
</p>
</div>
</div>
</div>
</body></html>