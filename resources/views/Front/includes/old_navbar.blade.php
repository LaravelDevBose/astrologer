<div class="scroll-wrapper" id="scroll-wrapper">
    <a href="#">
        <div class="scroll-btn" style="background: linear-gradient(to right, #FA7936, #9900EB);">
            <span>
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M18.2929 15.2893C18.6834 14.8988 18.6834 14.2656 18.2929 13.8751L13.4007 8.98766C12.6195 8.20726 11.3537 8.20757 10.5729 8.98835L5.68257 13.8787C5.29205 14.2692 5.29205 14.9024 5.68257 15.2929C6.0731 15.6835 6.70626 15.6835 7.09679 15.2929L11.2824 11.1073C11.673 10.7168 1cs2.3061 10.7168 12.6966 11.1073L16.8787 15.2893C17.2692 15.6798 17.9024 15.6798 18.2929 15.2893Z" fill="white"></path>
                    </g>
                </svg>
            </span>
        </div>
    </a>
</div>

<!-- MOBILE NAV -->
<nav class="mobile-navbar align-items-center justify-content-between py-3 px-2 w-100 fixed-top text-white shadow-sm z-index-2 bg-gradient-custom">
    <div>
        <img src="{{ asset('assets/logo.png') }}" alt="logo" style="max-height: 60px; user-select: none; -webkit-user-drag: none" />
    </div>
    <div>
        <button id="mob-nav-btn" class="mob-nav-bottom" style="background: transparent;">
            <i class="fas fa-bars text-light"></i>
        </button>
    </div>
</nav>

<div class="mobile-nav bg-light text-dark d-none" id="mobile-nav">
    <div class="position-absolute top-0 end-0 p-3 close-btn" >
        <button class="btn btn-light btn-sm rounded-pill py-2 px-3" style="border: 2px solid #e5e7eb; border-radius: 9999px;">
            <i class="fas fa-times text-dark"></i>
        </button>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-center h-100 w-75 mx-auto mt-3 gap-3 links">
        <a href="{{ route('index') }}" class=" {{ request()->routeIs('index')? 'active': '' }}">Home</a>
        <a href="{{ route('horoscope.index') }}" class=" {{ request()->routeIs('horoscope.index')? 'active': '' }}">Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class=" {{ request()->routeIs('Articles')? 'active': '' }}">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class=" {{ request()->routeIs('astrology-calendar')? 'active': '' }}">Astrology</a>
        <a href="{{ route('aboutus') }}" class=" {{ request()->routeIs('aboutus')? 'active': '' }}">About us</a>
        <a href="{{ route('contact') }}" class=" {{ request()->routeIs('contact')? 'active': '' }}">Contact us</a>
        <a href="{{ route('login') }}" class=" {{ request()->routeIs('login')? 'active': '' }}">Login</a>
    </div>
</div>

<!-- MOBILE NAV -->
<!-- NAVBAR -->
<div class="kd-navbar">
    <div>
        <a href="{{ route('index') }}">
            <img class="kv-logo" src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" style="
              max-height: 100px;
              user-select: none;
              -webkit-user-drag: none;
            " />
        </a>
    </div>

    <div class="links">
        <a href="{{ route('index') }}" class="{{ request()->routeIs('index')? 'active': '' }}">Home</a>
        <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }}">Horoscope</a>
        <a href="{{ route('Articles', ['slug'=>'All']) }}" class="{{ request()->routeIs('Articles')? 'active': '' }}">Articles</a>
        <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }}">Astrology</a>
        <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }}">About us</a>
        <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }}">Contact us</a>
        <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }}">Login</a>
    </div>
</div>
<!-- NAVBAR -->
