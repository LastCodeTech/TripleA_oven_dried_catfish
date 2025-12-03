<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Support Center - User Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#00695C", /* Deep, sophisticated dark teal */
              "accent": "#E6A800", /* Warm, inviting gold/ochre */
              "background-light": "#F8F9FA", /* Off-white for a clean feel */
              "background-dark": "#10221e",
              "text-light": "#0d1b19", /* Dark text for light background */
              "text-dark": "#f8f9fa", /* Light text for dark background */
              "text-muted-light": "#5c6b68",
              "text-muted-dark": "#a0b1ad",
              "card-light": "#FFFFFF",
              "card-dark": "#1a2c29",
              "border-light": "#E0E0E0",
              "border-dark": "#3a4c49",
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
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<!-- Top App Bar -->
<div class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between sticky top-0 z-10 border-b border-border-light dark:border-border-dark">
<div class="text-text-light dark:text-text-dark flex size-12 shrink-0 items-center -ml-2">
<a href="{{route('dashboard')}}"><span class="material-symbols-outlined text-2xl">arrow_back_ios_new</span></a>
</div>
<h2 class="text-text-light dark:text-text-dark text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">Support Center</h2>
<div class="flex size-12 shrink-0 items-center"></div> <!-- Spacer -->
</div>
<div class="p-5">
<!-- Headline Text -->
<h1 class="text-text-light dark:text-text-dark text-[32px] font-bold leading-tight tracking-tight text-left pb-2 pt-4">How can we help?</h1>
<!-- Search Bar -->
<div class="py-3">
<label class="flex flex-col min-w-40 h-14 w-full">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-primary flex border border-border-light dark:border-border-dark bg-background-light dark:bg-card-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-2xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-card-dark h-full placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search FAQs..." value=""/>
</div>
</label>
</div>
<div class="h-4"></div>
<!-- Support Options -->
<div class="flex flex-col gap-4">
<!-- List Item: Submit a Ticket -->
<div class="flex items-center gap-4 bg-card-light dark:bg-card-dark p-4 min-h-[72px] justify-between rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<span class="material-symbols-outlined">confirmation_number</span>
</div>
<div class="flex flex-col justify-center">
<p class="text-text-light dark:text-text-dark text-base font-semibold leading-normal line-clamp-1">Submit a Ticket</p>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-normal leading-normal line-clamp-2">For detailed, non-urgent inquiries.</p>
</div>
</div>
<div class="shrink-0">
<div class="text-text-muted-light dark:text-text-muted-dark flex size-7 items-center justify-center">
<span class="material-symbols-outlined">arrow_forward_ios</span>
</div>
</div>
</div>
<!-- List Item: Frequently Asked Questions -->
<div class="flex items-center gap-4 bg-card-light dark:bg-card-dark p-4 min-h-[72px] justify-between rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<span class="material-symbols-outlined">quiz</span>
</div>
<div class="flex flex-col justify-center">
<p class="text-text-light dark:text-text-dark text-base font-semibold leading-normal line-clamp-1">Frequently Asked Questions</p>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-normal leading-normal line-clamp-2">Find quick answers to common questions.</p>
</div>
</div>
<div class="shrink-0">
<div class="text-text-muted-light dark:text-text-muted-dark flex size-7 items-center justify-center">
<span class="material-symbols-outlined">arrow_forward_ios</span>
</div>
</div>
</div>
<!-- List Item: Live Chat -->
<div class="flex items-center gap-4 bg-card-light dark:bg-card-dark p-4 min-h-[72px] justify-between rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<span class="material-symbols-outlined">chat_bubble</span>
</div>
<div class="flex flex-col justify-center">
<p class="text-text-light dark:text-text-dark text-base font-semibold leading-normal line-clamp-1">Chat With Us</p>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-normal leading-normal line-clamp-2">Mon-Fri, 9am - 5pm</p>
</div>
</div>
<div class="shrink-0">
<div class="text-text-muted-light dark:text-text-muted-dark flex size-7 items-center justify-center">
<a href="{{route('contact')}}"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</body></html>