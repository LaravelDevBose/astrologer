

<!-- MOBILE NAV -->
<div class="flex items-center justify-between py-4 px-2 w-full lg:hidden fixed top-0 left-0 bg-black z-2 bg-gradient-custom">
    <div>
        <img src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" style="max-height: 60px; user-select: none; -webkit-user-drag: none" />
    </div>
    <div>
        <button id="mob-nav-btn" class="text-white text-lg font-medium px-4 py-1 rounded transition duration-300 ease-in-out font-light" >
            <i class="fas fa-bars text-white border-2 py-2 px-4 rounded-full"></i>
        </button>
    </div>
</div>

<div class="mobile-nav bg-white text-black-800 fixed top-0 left-0 h-screen w-screen z-10 hidden" id="mobile-nav">
    <div class="close-btn absolute top-5 right-5">
        <button class="hover:border-[#393939] text-lg font-medium rounded transition duration-300 ease-in-out font-light" >
            <i  class="fas fa-times hover:border-[#393939] border-2 py-2 px-4 rounded-full" ></i>
        </button>
    </div>
    <div class="flex flex-col items-center links h-screen w-8/12 mx-auto mt-8 gap-y-3" >
        <a href="{{ route('index') }}"  class="{{ request()->routeIs('index')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-4 py-1 rounded-full transition duration-300 ease-in-out font-header" >Home</a>
        <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header"  >Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class=" {{ request()->routeIs('Articles')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }}hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header">Astrology</a>
        <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header">About us</a>
        <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header">Contact us</a>
        <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }} hover:border-[#393939] text-lg font-medium px-3 py-1 mx-2 rounded-full transition duration-300 ease-in-out font-header" >Login</a>
    </div>
</div>

<!-- MOBILE NAV -->
<!-- NAVBAR -->
<div class="navbar lg:flex items-center justify-between py-4 w-11/12 hidden lg:block">
    <div>
        <a href="{{ route('index') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" style="
              max-height: 100px;
              user-select: none;
              -webkit-user-drag: none;
            " />
        </a>
    </div>
    <div class="flex items-center links font-header">
        <a href="{{ route('index') }}" class="{{ request()->routeIs('index')? 'active': '' }} text-white text-lg font-medium px-4 py-1 rounded transition duration-300 ease-in-out font-header ">Home</a>
        <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class=" {{ request()->routeIs('Articles')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">Astrology</a>
        <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">About us</a>
        <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">Contact us</a>
        <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out font-header">Login</a>
    </div>
</div>
<!-- NAVBAR -->
