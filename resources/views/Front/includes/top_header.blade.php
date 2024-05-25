<!---------------------------------scroll top start------------------------------------------>

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

<!---------------------------------scroll top end------------------------------------------>


<!---------------------------------Header------------------------------------------>
<!-- <div class="container-fluid headerContainer d-lg-block d-none" style="background: linear-gradient(to right, #FA7936, #9900EB);"> -->

    <!-- <div class="container d-flex justify-content-between align-items-center h-100 p-3"> -->
        <!-- <div class="box">
            <a href="{{asset('/storage/app/public')}}/{{$data['header']->facebooklink}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-facebook"></i></a>
            <a href="{{asset('/storage/app/public')}}/{{$data['header']->youtube}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-youtube"></i></a>
            <a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-instagram"></i></a>
        </div> -->
        <!-- <ul class="list-unstyled d-flex my-auto">
            <li class="ms-lg-4 ms-3"><a href="{{route('aboutus')}}" class="font-14-600 text-decoration-none" style="color: white;">ABOUT US</a></li>
            <li class="ms-lg-4 ms-3"><a href="{{route('contact')}}" class="font-14-600 text-decoration-none" style="color: white;">CONTACT US</a></li>
            @guest
            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;">LOGIN</a></li>
            @else
            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;"> <i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>

            <li class="ms-lg-4 ms-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>

            </li>
            @endguest
        </ul> -->
    <!-- </div> -->
<!-- </div> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Mobile Menu -->
    <div class="mobileMenuBox d-lg-none d-block" style="background: linear-gradient(to right, #FA7936, #9900EB);">
        <div class="container-fluid">
            <!-- Accordion -->
            <div class="accordion" id="mobileMenuAccordion">
                <div class="row" style="padding: 12px;">
                    <div class="col-6">
                        <!-- Social Media Links -->
                        <div class="box">
                            <a href="{{asset('/storage/app/public')}}/{{$data['header']->facebooklink}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-facebook"></i></a>
                            <a href="{{asset('/storage/app/public')}}/{{$data['header']->youtube}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-youtube"></i></a>
                            <a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" class="font-18-600 me-3" style="color: white;"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Navigation Links -->
                        <ul class="list-unstyled d-flex justify-content-end my-auto">
                            <li class="ms-lg-4 ms-3"><a href="{{route('aboutus')}}" class="font-14-600 text-decoration-none" style="color: white;">ABOUT</a></li>
                            <li class="ms-lg-4 ms-3"><a href="{{route('contact')}}" class="font-14-600 text-decoration-none" style="color: white;">CONTACT</a></li>
                            @guest
                            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;">LOGIN</a></li>
                            @else
                            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;"> <i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>
                            <li class="ms-lg-4 ms-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>