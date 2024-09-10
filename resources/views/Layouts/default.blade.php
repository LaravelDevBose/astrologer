<!DOCTYPE html>
<html lang="en">
<head>
    @include('Front.includes.head')
    @stack('customCss')
</head>
<body>
    <div class="w-11/12 mx-auto overflow-x-hidden">
        @include('Front.includes.new_navbar')
    </div>
    <div class="kd-content" style="margin-top: 10rem">
    @yield('content')
    </div>
    @include('Front.includes.footer')

    <script>
        const mobileNav = document.getElementById("mobile-nav");
        const navBtn = document.getElementById("mob-nav-btn");
        const closeBtn = document.querySelector(".close-btn");

        closeBtn.addEventListener("click", () => {
            mobileNav.classList.toggle("hidden");
            mobileNav.classList.toggle("block");
        });

        navBtn.addEventListener("click", () => {
            mobileNav.classList.toggle("hidden");
            mobileNav.classList.toggle("block");
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('script')
</body>

</html>