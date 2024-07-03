<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="Krishna Speak is a platform where you can get your free reading now. We provide you with the best astrology services."
    />
    <title>Read Your Daily Horoscope! | Krishnaspeaks</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/app/public')}}/{{$data['header']->feviconLogo}}">
    <meta name="keywords" content="astrology, horoscope, free reading, astrology services, krishna speak"  />
    <meta name="author" content="Krishna Speak" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"  />
    <meta name="theme-color" content="#000000" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <meta name="developer" content="Brainchild software" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-x-hidden">
@include('Front.includes.navbar')
<!-- HERO -->
<div class="mt-40 lg:mt-0 grid hero w-11/12 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-4" style="z-index: 1">
        <div class="flex items-center justify-center lg:col-span-3 lg:h-screen">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 welcome-text">
                    Welcome To <br />
                    <span> Krishna Speak</span><span class="com ms-1">.com </span>
                </h1>
                <p class="text-gray-300 my-5 md:my-10 text-2xl font-light">
                    “Unlocking the Cosmos Within: Astrology, Where Stars Meet
                    Destiny.”
                </p>
                <a href="{{ route('horoscope.reading') }}">
                    <button class="reading-btn mt-10">
                        GET YOUR FREE READING NOW!
                    </button>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-end lg:col-span-4" style="overflow: visible" >
            <img src="{{ asset('assets/hero.png') }}" alt="hero" srcset="" class="w-100 hero-img"  />
        </div>
    </div>
</div>
<!-- HERO -->
<script>
    const mobileNav = document.getElementById("mobile-nav");
    const navBtn = document.getElementById("mob-nav-btn");
    const closeBtn = document.querySelector(".close-btn button");

    closeBtn.addEventListener("click", () => {
        mobileNav.classList.remove("active");
    });

    navBtn.addEventListener("click", () => {
        mobileNav.classList.toggle("active");
    });
</script>
</body>
</html>
