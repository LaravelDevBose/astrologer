<!-- MOBILE NAV -->
<div class="flex items-center justify-between py-4 px-2 w-full lg:hidden fixed top-0 left-0 bg-black z-2">
    <div>
        <img src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" style="max-height: 60px; user-select: none; -webkit-user-drag: none" />
    </div>
    <div>
        <button id="mob-nav-btn" class="text-white text-lg font-medium px-4 py-1 rounded transition duration-300 ease-in-out font-light" >
            <i class="fas fa-bars text-white border-2 py-2 px-4 rounded-full"></i>
        </button>
    </div>
</div>

<div class="mobile-nav bg-black fixed top-0 left-0 h-screen w-screen z-10" id="mobile-nav">
    <div class="flex flex-col items-center links h-screen justify-center w-10/12 mx-auto" >
        <div class="close-btn absolute top-5 right-5">
            <button class="text-white text-lg font-medium rounded transition duration-300 ease-in-out font-light" >
                <i  class="fas fa-times text-white border-2 py-2 px-4 rounded-full" ></i>
            </button>
        </div>
        <a href="{{ route('index') }}"  class="{{ request()->routeIs('index')? 'active': '' }} text-white text-lg font-medium px-4 py-1 rounded transition duration-300 ease-in-out" >Home</a>
        <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out"  >Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class=" {{ request()->routeIs('Articles')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }}text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Astrology</a>
        <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">About us</a>
        <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Contact us</a>
        <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out" >Login</a>
    </div>
</div>

<!-- MOBILE NAV -->
<!-- NAVBAR -->
<div class="navbar lg:flex items-center justify-between py-4 w-11/12 hidden">
    <div>
        <a href="{{ route('index') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" style="
              max-height: 100px;
              user-select: none;
              -webkit-user-drag: none;
            " />
        </a>
    </div>
    <div class="flex items-center links">
        <a href="{{ route('index') }}" class="{{ request()->routeIs('index')? 'active': '' }} text-white text-lg font-medium px-4 py-1 rounded transition duration-300 ease-in-out ">Home</a>
        <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class=" {{ request()->routeIs('Articles')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Astrology</a>
        <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">About us</a>
        <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Contact us</a>
        <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }} text-white text-lg font-medium px-3 py-1 mx-2 rounded transition duration-300 ease-in-out">Login</a>
    </div>
</div>
<!-- NAVBAR -->
