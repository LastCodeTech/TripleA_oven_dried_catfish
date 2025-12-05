  
  <header class="w-full bg-white shadow-sm px-4 py-3 sticky top-0 z-50">
    <div class="flex items-center justify-between">

        <!-- LOGO -->
        <h1 class="text-2xl font-bold uppercase text-slate-800">
            Triple A
        </h1>

        <!-- DESKTOP NAV -->
        <nav class="hidden lg:block">
            <ul class="flex items-center gap-8">
               
                @guest
                     <li><a href="{{route('home')}}" class="text-lg font-medium   text-[#1a4c42]   ">Home</a></li>
                    <li><a href="{{route('blog')}}" class="text-lg font-medium   text-[#1a4c42]   ">Blog</a></li>
                    <li><a href="{{route('login')}}" class="text-lg font-medium  text-white py-2 px-3 rounded-md bg-[#1a4c42]   ">Login</a></li>
                    <li><a href="{{route('signup')}}" class="text-lg font-medium  text-white py-2 px-3 rounded-md bg-[#1a4c42]   ">Register</a></li>
                @endguest
                @auth
                 <li><a href="{{route('home')}}" class="text-lg font-medium   text-[#1a4c42]   ">Home</a></li>
                <li><a href="{{route('blog')}}" class="text-lg font-medium   text-[#1a4c42]   ">Blog</a></li>
                 <li><a href="{{route('about')}}" class="text-lg font-medium    text-[#1a4c42] ">About</a></li>
                <li><a href="{{route('gallery')}}" class="text-lg font-medium   text-[#1a4c42]">gallery</a></li>
                <li><a href='{{route('shop')}}' class="text-lg font-medium   text-[#1a4c42]   ">Shop</a></li>
                <li><a href="{{route('contact')}}" class="text-lg font-medium   text-[#1a4c42]   ">contact</a></li>   
                @endauth
                
            </ul>
        </nav>

        <!-- ICONS -->
         @auth<div class="flex items-center gap-5">
           <button class="text-2xl  text-[#1a4c42] hover:text-yellow-600 relative">
                <a href="{{route('cart')}}"><i class="fa-solid fa-basket-shopping"></i></a>
                <!-- Cart count -->
                <span class="absolute -top-1 -right-2 bg-red-600 text-white text-xs px-1.5 rounded-full">3</span>
            </button>
            <button class="text-2xl  text-[#1a4c42] hover:text-yellow-600">
              <a href="{{route('dashboard')}}">  <i class="fa-solid fa-user"></i></a>
            </button>
           
            <!-- MOBILE MENU TOGGLE -->
           <button class="text-2xl text-slate-700 hover:text-yellow-600 lg:hidden" id="triggerBtn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>@endauth
        @guest
        <button class="text-2xl text-slate-700 hover:text-yellow-600 lg:hidden" id="triggerBtn">
                <i class="fa-solid fa-bars"></i>
            </button>
        @endguest
    </div>

    <!-- MOBILE NAV -->
    
    <nav id="mobileMenu" class="hidden lg:hidden mt-4 z-10 relative">
        @auth<ul class="flex flex-col gap-4 text-center">
            <li class='border-b border-[#1a4c42]'><a href='{{route('home')}}' class="text-lg     text-[#1a4c42]">Home</a></li>
            <li class='border-b border-[#1a4c42]'><a href="{{route('blog')}}" class="text-lg     text-[#1a4c42] ">Blog</a></li>
            <li class='border-b border-[#1a4c42]'><a href='{{route('shop')}}' class="text-lg     text-[#1a4c42]">Shop</a></li>
            <li class='border-b border-[#1a4c42]'><a href="{{route('about')}}" class="text-lg    text-[#1a4c42] ">About</a></li>
            <li class='border-b border-[#1a4c42]'><a href="{{route('gallery')}}" class="text-lg  text-[#1a4c42] ">Gallery</a></li>
            <li ><a href="{{route('contact')}}" class="text-lg     text-[#1a4c42] ">contact</a></li>
        </ul> @endauth
        @guest
             <div class='flex flex-col items-center space-y-2'>
                <a href='{{route('home')}}' class="text-lg     text-[#1a4c42] border-b border-[#1a4c42]">Home</a>
             <a href="{{route('blog')}}" class="text-lg     text-[#1a4c42] border-b border-[#1a4c42]">Blog</a>
             <button class="w-full"> <a href="{{route('login')}}" class=" text-lg font-medium  text-white py-2 px-3 rounded-md bg-[#1a4c42]">login</a></button>
             <button class="w-full py-3"> <a href="{{route('signup')}}" class=" text-lg font-medium  text-white py-2 px-3 rounded-md bg-[#1a4c42]">Register</a></button>
             </div>
        @endguest
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


