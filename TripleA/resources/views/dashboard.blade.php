<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard Overview - User Account</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24;
        }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#1a4c42",
              "background-light": "#f6f8f8",
              "background-dark": "#10221e",
              "deep-ocean-blue": "#0A2342",
              "earthy-brown": "#A98D72",
              "soft-gold": "#FFD700"
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
<body class="font-display">
<div class="relative flex min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<!-- Top App Bar -->
<div class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between">
<div class="flex w-12 items-center justify-start">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 bg-transparent text-deep-ocean-blue dark:text-background-light gap-2 text-base font-bold leading-normal tracking-[0.015em] min-w-0 p-0">
<a href="{{route('home')}}"><i class="fa-solid fa-arrow-left-long text-2xl"></i></a>
</button>
</div>
<div class=" justify-end"><div class="flex  shrink-0 items-center">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA2o9vERfHeW-85pXq4Qy8EoEySYRp6PgDZDuTPLo_Lv0tUMt-fxq9HXTCayiu4-iKZF0SvTDq6HqzRhuWEeELEr4pW46-C1l0f6pGdG39b-8hk6Pxq15Qg3cREc9TQJ-wZWXxfu0ycpmpnHB1hzzSX5ftrEwX1oNYWVEXSbkD_nG0d76315s9Ru0zye5fELiBxqV9IeOIS6cqnyqjdYScce1mk6Ser_ZlUOcseP-KyfZgUM_8XYMbx6yz1rDtiAO7VS5CqB8MuNag");'></div>
<h2 class="text-deep-ocean-blue dark:text-background-light text-xl font-bold leading-tight tracking-[-0.015em] flex-1 ml-2">Hi, {{Auth::user()->name}}</h2>
</div>
<p class="text-gray-600 dark:text-gray-400 text-base font-normal leading-normal px-4">Welcome to your account dashboard.</p>
</div>
</div>
<!-- Body Text -->
<!-- Stats -->
<div class="flex flex-col sm:flex-row gap-4 p-4">
<div class="flex flex-1 flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A]">
<p class="text-deep-ocean-blue dark:text-gray-300 text-base font-medium leading-normal">Total Orders</p>
<p class="text-deep-ocean-blue dark:text-white tracking-light text-3xl font-bold leading-tight">15</p>
</div>
<div class="flex flex-1 flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A]">
<p class="text-deep-ocean-blue dark:text-gray-300 text-base font-medium leading-normal">Pending</p>
<p class="text-deep-ocean-blue dark:text-white tracking-light text-3xl font-bold leading-tight">2</p>
</div>
<div class="flex flex-1 flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A]">
<p class="text-deep-ocean-blue dark:text-gray-300 text-base font-medium leading-normal">Delivered</p>
<p class="text-deep-ocean-blue dark:text-white tracking-light text-3xl font-bold leading-tight">13</p>
</div>
</div>
<!-- Section Header -->
<h3 class="text-deep-ocean-blue dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Quick Links</h3>
<!-- Text Grid -->
<div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
<div class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">person</span>
<div class="flex flex-col gap-1">
<h2 class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight">My Profile</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Manage your details</p>
</div>
</div>
<div class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">receipt_long</span>
<div class="flex flex-col gap-1">
<h2 class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight">Order History</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">View past orders</p>
</div>
</div>
<div class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">home_pin</span>
<div class="flex flex-col gap-1">
<h2 class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight">Saved Addresses</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Edit your addresses</p>
</div>
</div>
<div class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">credit_card</span>
<div class="flex flex-col gap-1">
<h2 class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight">Payment Methods</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Update payment info</p>
</div>
</div>
<a href="{{route('contact')}}"><div class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">help</span>
<div class="flex flex-col gap-1">
<h2 class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight">Help &amp; Support</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Get help</p>
</div>
</div></a>
<form action="{{route('logout.process')}}" method="POST">
        @csrf
<button class="flex flex-1 gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1C2C3A] p-4 flex-col">
<span class="material-symbols-outlined text-earthy-brown text-2xl">logout</span>
<div class="flex flex-col gap-1">
    
<input type='submit' value="Log Out" class="text-deep-ocean-blue dark:text-white text-base font-bold leading-tight" />
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Sign out of your account</p>
</div>
</button></form>
</div>
<div class="grow"></div>

</div>
</body></html>