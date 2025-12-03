<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profile Settings - User Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": {
                  DEFAULT: "#1a4c42",
                  "50": "#FFFDE7",
                  "100": "#FFF9C4",
                  "200": "#FFF59D",
                  "300": "#FFF176",
                  "400": "#FFEE58",
                  "500": "#FFEB3B",
                  "600": "#FDD835",
                  "700": "#FBC02D",
                  "800": "#F9A825",
                  "900": "#F57F17"
              },
              "background-light": "#FFFFFF",
              "background-dark": "#121212",
              "text-light": "#212121",
              "text-dark": "#FAFAFA",
              "border-light": "#E0E0E0",
              "border-dark": "#424242",
              "placeholder-light": "#757575",
              "placeholder-dark": "#9E9E9E",
              "secondary": {
                DEFAULT: "#4CAF50",
                '100': '#E8F5E9',
                '900': '#1B5E20'
              }
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
        .form-input:focus {
            outline: 2px solid #FFC107;
            outline-offset: 2px;
            border-color: transparent !important;
        }
        .form-switch:checked {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
        .form-switch:checked:focus {
            outline-color: #4CAF50;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col md:px-20">
<div class="sticky top-0 z-10 flex items-center justify-between border-b border-border-light bg-background-light p-4 dark:border-border-dark dark:bg-background-dark">
<button class="flex size-10 items-center justify-center rounded-full text-text-light dark:text-text-dark">
<a href="{{route('dashboard')}}"><span class="material-symbols-outlined text-2xl">arrow_back_ios_new</span></a>
</button>
<h1 class="text-lg font-bold text-text-light dark:text-text-dark">Profile Settings</h1>
<div class="w-10"></div>
</div>
<main class="flex-1">
<!-- Profile Header -->
<div class="flex flex-col items-center gap-4 p-6">
<div class="relative">
<div class="h-28 w-28 rounded-full bg-cover bg-center" data-alt="A man with short-cropped hair and a beard smiling gently at the camera." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNAu9jZ-gxGCeGuxez6_BFxI3v5hz-ZV30vA0DGFmRj2yGUgy9DqCSYMUpurwEUJzathd56ftEd37laGxM0_XPr3YwbRqw6QgAD8AeAYuWGJxLELSaoiqEUP56Z6cDQrip_zzbMlSxj_DxG2_3RXnpo7CbCKyWdjSEvGXeR3jpbj0a8TWJEG4Rtxsvd-mpRrojE2s0Ls1GqFQOuIfSlTQaByEIl55t745BrtRzhyseJOs2GjzoKVtHl3uuJJZEDE-8WnPyjEdHcW4')"></div>
<button class="absolute bottom-0 right-0 flex h-8 w-8 items-center justify-center rounded-full border-2 border-background-light bg-primary text-black dark:border-background-dark">
<span class="material-symbols-outlined text-lg text-white">edit</span>
</button>
</div>
</div>
<!-- Personal Information Section -->
<div class="px-4">
<div class="rounded-xl border border-border-light bg-background-light p-4 dark:border-border-dark dark:bg-background-dark">
<h2 class="mb-4 text-base font-semibold text-text-light dark:text-text-dark">Personal Information</h2>
<div class="flex flex-col gap-4">
<label class="flex flex-col">
<span class="pb-2 text-sm font-medium text-placeholder-light dark:text-placeholder-dark">Full Name</span>
<input class="myinput readonly form-input h-12 w-full rounded-DEFAULT border border-border-light bg-background-light p-3 text-base text-text-light placeholder:text-placeholder-light focus:ring-0 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-placeholder-dark" type="text" value="Adebayo Adekunle"/>
</label>
<label class="flex flex-col">
<span class="pb-2 text-sm font-medium text-placeholder-light dark:text-placeholder-dark">Email Address</span>
<input class="myinput readonly form-input h-12 w-full rounded-DEFAULT border border-border-light bg-background-light p-3 text-base text-text-light placeholder:text-placeholder-light focus:ring-0 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-placeholder-dark" type="email" value="adebayo@example.com"/>
</label>
<label class="flex flex-col">
<span class="pb-2 text-sm font-medium text-placeholder-light dark:text-placeholder-dark">Phone Number</span>
<input class="myinput readonly form-input h-12 w-full rounded-DEFAULT border border-border-light bg-background-light p-3 text-base text-text-light placeholder:text-placeholder-light focus:ring-0 dark:border-border-dark dark:bg-background-dark dark:text-text-dark dark:placeholder:text-placeholder-dark" type="tel" value="+234 801 234 5678"/>
</label>
</div>
</div>
</div>


</main>
<!-- Fixed Bottom Bar -->
<div class="fixed bottom-0 left-0 w-full border-t border-border-light bg-background-light/80 p-4 backdrop-blur-sm dark:border-border-dark dark:bg-background-dark/80">
<button class="h-14 w-full rounded-lg bg-primary text-base font-bold text-white shadow-lg shadow-primary/20">Save Changes</button>
</div>
</div>
</body></html>