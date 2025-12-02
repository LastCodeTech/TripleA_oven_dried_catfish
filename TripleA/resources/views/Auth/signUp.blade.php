<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sign Up Page - Triple A Account</title>
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
      min-height: max(884px, 100dvh);
    }
  </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-sans">  
<div class="relative flex min-h-screen w-full flex-col items-center bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<h2 class="text-base md:xl font-semibold capitalize text-red-600 pt-2">hii</h2>
<div class="flex w-full max-w-md flex-1 flex-col justify-center px-6 py-12">
<div class="flex justify-center pb-8">
<div class="text-center gap-2 text-2xl md:text-5xl ">
<i class="fa-solid fa-fish-fins fa-bounce text-primary dark:text-accent "></i>
<h2 class="font-display font-bold tracking-wide text-text-light dark:text-text-dark">Triple A Oven Dried Catfish</h2>
</div>
</div>
<h1 class="text-text-light dark:text-text-dark font-display tracking-tight text-2xl md:text-4xl font-thin leading-tight text-center pb-8">Create your account</h1>
<form action="{{route('signup.process')}}" method="POST">
    @csrf
<div class="w-full">
<div class="flex w-full flex-wrap items-end gap-4 pb-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Full Name</p>
<input name="name" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Enter your full name" type="text" value="{{old('name')}}"/>
@error('name')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror
</label>
</div>
<div class="flex w-full flex-wrap items-end gap-4 pb-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Email Address</p>
<input name='email' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Enter your email address" type="email" value="{{old('email')}}"/>
@error('email')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror
</label>
</div>
<div class="flex w-full flex-wrap items-end gap-4 pb-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Password</p>
<div class="relative flex w-full flex-1 items-stretch">
<input name="password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] pr-12 text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Create a password" type="password" value=""/>
<button aria-label="Toggle password visibility" class="text-text-muted-light dark:text-text-muted-dark absolute inset-y-0 right-0 flex items-center pr-4">
<span class="material-symbols-outlined">visibility_off</span>
</button>
</div>
@error('password')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror
</label>
</div>
<div class="flex w-full flex-wrap items-end gap-4 pb-2">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Confirm Password</p>
<div class="relative flex w-full flex-1 items-stretch">
<input name="password_confirmation" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-accent dark:focus:border-accent h-14 placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark p-[15px] pr-12 text-base font-normal leading-normal ring-0 focus:ring-2 focus:ring-accent/30" placeholder="Confirm your password" type="password" value=""/>
<button aria-label="Toggle password visibility" class="text-text-muted-light dark:text-text-muted-dark absolute inset-y-0 right-0 flex items-center pr-4">
<span class="material-symbols-outlined">visibility_off</span>
</button>
</div>
@error('password_confirmation')
<h2 class="text-sm md:text-base font-semibold capitalize text-red-600 pt-2">{{$message}}</h2>  
@enderror
</label>
</div>
</div>
<div class="h-8"></div>
<div class="flex w-full flex-col items-center gap-4 px-0 py-3">
<input type='submit' value="Sign Up" class="flex h-14 w-full items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-primary px-5 py-3 text-base font-semibold leading-7 text-white shadow-sm transition-transform duration-200 ease-in-out hover:scale-[1.02] active:scale-[0.98]" />
</div></form>
<div class="flex items-center gap-4 py-4">
<div class="h-px flex-1 bg-border-light dark:bg-border-dark"></div>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm">or sign up with</p>
<div class="h-px flex-1 bg-border-light dark:bg-border-dark"></div>
</div>
<div class="flex w-full flex-col items-center gap-4">
<button class="flex h-14 w-full items-center justify-center gap-3 whitespace-nowrap rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-5 py-3 text-base font-medium leading-7 text-text-light dark:text-text-dark shadow-sm transition-transform duration-200 ease-in-out hover:scale-[1.02] active:scale-[0.98]">
<img alt="Google logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHu2b_oMi6BhU3LxilwdBYv_DW0R8tfbs7uonaDmILjDf2oB6dB_h8M6wa3BzELnwx1yExNOThzJsfL23fAHTm9XEzFBh6WQJQ16nFXake3D4eaWsUzCxTy1MV7ouOQrqyRbs842v4KrwPbElz8RkQrVPQKPqJdUVFeAf4QDUMKCxLSr-gnupL-UiIDue3NJGLViksIotCtJsdPhMry3Aeyxa3QVs6M_z8bj1WQq70RWBd7s4-ilcfi7FZbWpiE4akXBNHku_zjP0"/>
                    Continue with Google
                </button>
<button class="flex h-14 w-full items-center justify-center gap-3 whitespace-nowrap rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-5 py-3 text-base font-medium leading-7 text-text-light dark:text-text-dark shadow-sm transition-transform duration-200 ease-in-out hover:scale-[1.02] active:scale-[0.98]">
<img alt="Apple logo" class="h-6 w-6 dark:invert" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWD7eTg365bHXiGFa2126B-p674jzVMlm_LARrWSUx24mUIs1bC7KcB5D2DRUuTimf_GWKmhYuDeU-7Lzfl3hjSPIzFN74x182yFwZ9hQzS3KKFohyF9Z0W26PYJAnKyW1My3XO3ZMGyBX7iHAuyPcw09YZTL3R6Qg6f_mF2Sk3z1HNjC-XeYPY3LMG_n3iO4xmnAuy-pnv53FXiDGayXITM7SwzpVWHimzbOpP8WYxNK3PeMn6MEikO_TWPvQQnEiQFi5uVkPYXk"/>
                    Continue with Apple
                </button>
</div>
<div class="h-8"></div>
<div class="text-center">
<p class="text-text-light dark:text-text-dark text-base font-normal">
                    Already have an account? <a class="font-bold text-primary dark:text-accent underline" href="#">Log In</a>
</p>
</div>
</div>
</div>
</body></html>