<!doctype html>
<html lang="en">

   @include('Front.includes.head')

<body>

{{--     @include('Front.includes.top_header')--}}
     @include('Front.includes.navbar')
     @yield('content')
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
</body>
</html>