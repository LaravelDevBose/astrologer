<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Krishna Speak is a platform where you can get your free reading now. We provide you with the best astrology services."/>
    <meta name="keywords" content="astrology, horoscope, free reading, astrology services, krishna speak"/>
    <title>Krishna Speak</title>
    <meta name="author" content="Krishna Speak"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="theme-color" content="#000000"/>
    <meta name="developer" content="Brainchild software" />
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/app/public')}}/{{$data['header']->feviconLogo}}">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/form/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/form/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/form/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/form/css/normalize.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">


    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-11/12 mx-auto overflow-x-hidden">
@include('Front.includes.new_navbar')

<!-- HERO -->
<div class="grid hero">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-4">
        <div class="flex items-center justify-center lg:col-span-3">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 welcome-text">
                    Welcome To <br/>
                    <span> Krishna Speak</span><span class="com ms-1">.com </span>
                </h1>
                <p class="text-gray-300 my-5 md:my-10 text-2xl font-light">
                    “Unlocking the Cosmos Within: Astrology, Where Stars Meet
                    Destiny.”
                </p>
                <a href="{{ route('horoscope.reading') }}">
                    <button class="reading-btn mt-10 ml-3">
                        GET YOUR FREE READING NOW!
                    </button>
                </a>
            </div>
        </div>
        <div
                class="flex items-center justify-end lg:col-span-4"
                style="overflow: visible"
        >
            <img
                    src="{{ asset('assets/hero.png') }}"
                    alt="hero"
                    srcset=""
                    class="w-100 hero-img"
            />
        </div>
    </div>
</div>
<!-- HERO -->
<div id="modalBackdrop" class="fixed inset-0 bg-gray-900 bg-opacity-20 hidden z-50 ">
    <!-- Modal content -->
    <div class="flex items-center justify-center h-full w-full overflow-auto">
        <div class="bg-white rounded-lg shadow-lg mx-2 sm:mx-0 py-4 px-1 md:px-4 w-96 sm:w-80 md:w-[52rem] ">
            @include('Front.includes.homeform')
            <div class="w-full flex justify-center items-center mt-4">
                <button id="closeModal" type="button">Skip</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"
        type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"
        type="text/javascript"></script>

<script src="{{ asset('assets/form/js/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/form/js/form.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/form/js/loader.js') }}" type="text/javascript"></script>


<script>
    // Function to show the modal
    function showModal() {
        document.getElementById('modalBackdrop').classList.remove('hidden');
        document.getElementsByTagName('body')[0].classList.add('overflow-hidden');
    }
    // Function to hide the modal
    function hideModal() {
        document.getElementById('modalBackdrop').classList.add('hidden');
        document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
    }
    // Show the modal when the page loads
    window.onload = function() {
        showModal();
    };
    // Event listener to close the modal
    document.getElementById('closeModal').addEventListener('click', hideModal);
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

    $("#floatingFormBtn").click(function(e) {
        e.preventDefault();
        let form = $('#floatingForm')[0];
        submitForm(form);
    });

    function submitForm(form) {
        debugger;
        let data = new FormData(form);
        $(`#floatingForm`).addClass('hidden');
        $(`#homeReqFormRes`).addClass('active');
        $(`#reqToServer`).removeClass('hidden');
        $(`#reqResponseSuccess`).addClass('hidden');
        $(`#reqResponseError`).addClass('hidden');
        $.ajax({
            url: "{{ route('submitHomeHoroscopeForm') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function(response) {
                $(`#reqToServer`).addClass('hidden');
                if (response.status === 200) {
                    $(`#reqResponseError`).addClass('hidden');
                    $(`#reqResponseSuccess`).removeClass('hidden');
                    $('#resMes').html(response.message)
                } else {
                    $(`#reqResponseSuccess`).addClass('hidden');
                    $(`#reqResponseError`).removeClass('hidden');
                    $('#errorMsg').html('Something Wrong. Reload and Try again.')
                }
            },
            error: function(xhr, status, error) {
                $(`#reqToServer`).addClass('hidden');
                $(`#reqResponseSuccess`).addClass('hidden');
                if (xhr.status === 422) {
                    $(`#reqResponseError`).removeClass('hidden');
                    $('#errorMsg').html(xhr.responseJSON?.message ?? 'Please fill all required fields');
                } else {
                    $(`#reqResponseError`).removeClass('hidden');
                    $('#errorMsg').html('Something Wrong. Reload and Try again');
                }
            }

        });
    }
</script>
</body>
</html>
