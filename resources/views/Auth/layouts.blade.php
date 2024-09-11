<!doctype html>
<html lang="en">
<head>
    @include('Front.includes.head')
    @stack('customCss')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>

{{--     @include('Front.includes.top_header')--}}
    <div class="w-11/12 mx-auto overflow-x-hidden">
        @include('Front.includes.old_navbar')
    </div>
    <div class="kd-content" style="margin-top: 10rem; z-index: 1">
         @yield('content')
    </div>
     @include('Front.includes.footer')

        <!---------------------------------script start------------------------------------------>
        <script src="{{asset('/public/assets/assets/js/scroll.js')}}"></script>
        <!---------------------------------script end------------------------------------------>
        <script>
            function validatePassword() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
                var errorElement = document.getElementById("passwordError");

                if (password !== confirmPassword) {
                    errorElement.textContent = "Passwords do not match!";
                    event.preventDefault(); // Prevent form submission
                } else {
                    errorElement.textContent = ""; // Clear error message
                }
            }
        </script>

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
</body>
</html>