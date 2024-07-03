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
<div class="mobile-nav">
    <div class="mob-nav-top">
        <div class="links">
            <a href="{{$data['header']->facebooklink}}">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="{{$data['header']->youtube}}">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="{{$data['header']->instagram}}">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <div class="links">
            <a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus')? 'active': '' }}">About us</a>
            <a href="{{route('contact')}}" class="{{ request()->routeIs('contact')? 'active': '' }}">Contact us</a>

            <a href="{{route('login')}}" class="{{ request()->routeIs('login')? 'active': '' }}">Login</a>
        </div>
    </div>
    <div class="mob-nav-bottom">
        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="logo" srcset="" />
        </div>
        <div>
            <button id="mob-nav-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</div>
<div style="position: absolute; top: 0; left: 0;  width: 100vw;  height: 100vh; overflow-x: hidden;">
    <div class="kd-mobile-nav" id="mobile-nav">
        <div class="kd-mobile-nav-links">
            <div class="close-btn"> <button>  <i class="fas fa-times"></i> </button> </div>
            <a href="{{ route('index') }}" class="{{ request()->routeIs('index')? 'active': '' }}">Home</a>
            <a href="{{ route('horoscope.index') }}" class="{{ request()->routeIs('horoscope.index')? 'active': '' }}">Horoscope</a>
            <a href="{{ route('Articles', ['slug'=>'All']) }}" class="{{ request()->routeIs('Articles')? 'active': '' }}">Articles</a>
            <a href="{{ route('astrology-calendar', ['month'=> 'January']) }}" class="{{ request()->routeIs('astrology-calendar')? 'active': '' }}">Astrology</a>
        </div>
    </div>
</div>
<!-- MOBILE NAV -->
<!-- NAVBAR -->
<div class="kd-navbar absolute w-full px-12">
    <div>
        <a href="{{ route('index') }}">
            <img
                    src="{{ asset('assets/logo.png') }}"
                    alt="logo"
                    srcset=""
                    class="me-10"
                    style=" user-select: none; -webkit-user-drag: none; height: auto; width: 100%; max-width: 260px; min-width: 200px;" />
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
        <a href="{{$data['header']->facebooklink}}">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="{{$data['header']->youtube}}">
            <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="{{$data['header']->instagram}}">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>
</div>
<!-- NAVBAR -->
