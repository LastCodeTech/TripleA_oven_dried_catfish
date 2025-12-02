  <header class="w-full bg-white shadow-sm px-4 py-3 sticky top-0 z-50">
    <div class="flex items-center justify-between">

        <!-- LOGO -->
        <h1 class="text-2xl font-bold uppercase text-slate-800">
            Triple A
        </h1>

        <!-- DESKTOP NAV -->
        <nav class="hidden lg:block">
            <ul class="flex items-center gap-8">
                <li><a href="{{route('home')}}" class="text-lg font-medium text-slate-700 hover:text-red-600">Home</a></li>
                <li><a href='{{route('shop')}}' class="text-lg font-medium text-slate-700 hover:text-red-600">Shop</a></li>
                <li><a href="{{route('about')}}" class="text-lg font-medium text-slate-700 hover:text-red-600">About</a></li>
                <li><a href="{{route('gallery')}}" class="text-lg font-medium text-slate-700 hover:text-red-600">gallery</a></li>
                <li><a href="{{route('blog')}}" class="text-lg font-medium text-slate-700 hover:text-red-600">Blog</a></li>
            </ul>
        </nav>

        <!-- ICONS -->
        <div class="flex items-center gap-5">
            <button class="text-2xl text-slate-700 hover:text-yellow-600">
                <i class="fa-solid fa-phone"></i>
            </button>
            <button class="text-2xl text-slate-700 hover:text-yellow-600 relative">
                <i class="fa-solid fa-basket-shopping"></i>
                <!-- Cart count -->
                <span class="absolute -top-1 -right-2 bg-red-600 text-white text-xs px-1.5 rounded-full">3</span>
            </button>

            <!-- MOBILE MENU TOGGLE -->
            <button class="text-2xl text-slate-700 hover:text-yellow-600 lg:hidden" id="triggerBtn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- MOBILE NAV -->
    <nav id="mobileMenu" class="hidden lg:hidden mt-4 z-10 relative">
        <ul class="flex flex-col gap-4">
            <li><a href='{{route('home')}}' class="text-lg text-slate-700 hover:text-red-600">Home</a></li>
            <li><a href='{{route('shop')}}' class="text-lg text-slate-700 hover:text-red-600">Shop</a></li>
            <li><a href="{{route('about')}}" class="text-lg text-slate-700 hover:text-red-600">About</a></li>
            <li><a href="{{route('gallery')}}" class="text-lg text-slate-700 hover:text-red-600">Gallery</a></li>
            <li><a href="{{route('blog')}}" class="text-lg text-slate-700 hover:text-red-600">Blog</a></li>
        </ul>
    </nav>
</header>
<script>
  let triggerBtn=document.getElementById('triggerBtn');
  let mobileMenu=document.getElementById('mobileMenu');
triggerBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      triggerBtn.innerHTML = mobileNavList.classList.contains('hidden') 
        ? ' <span class="material-symbols-outlined text-3xl">menu</span>' 
        : '<h1 class="text-3xl font-bold capitalize text-white">x</h1>';
    });
    </script>


