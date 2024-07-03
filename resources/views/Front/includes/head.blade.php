<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/app/public')}}/{{$data['header']->feviconLogo}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front2/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front2/css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.css">
    <meta name="developer" content="Brainchild software" />
    <script src="https://kit.fontawesome.com/46102b2060.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    
    <title>Read Your Daily Horoscope! | Krishnaspeaks</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
        .custom-floating-contact-btn_personalized {
            position: fixed;
            bottom: 100px;
            right: 20px;
            background: linear-gradient(to right, #FA7936, #9900EB);
            color: white;
            padding: 20px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            z-index: 999;
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.1);
        }

        .custom-floating-contact-btn_personalized:hover {
            background: linear-gradient(to right, #FA7936, #9900EB);
        }

        .custom-floating-contact-form_personalized {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 10px;
            max-height: 80vh;
            overflow-y: auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            z-index: 1000;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media only screen and (max-width: 767px) {
            .custom-floating-contact-form_personalized {
                right: 0;
                width: 100%;
                max-height: 100vh;
                overflow-y: auto;
                padding-top: 60px;
                /* Add padding top only for mobile */
            }
        }

        .custom-floating-contact-form_personalized h2 {
            margin-top: 30px;
        }

        .custom-floating-contact-form_personalized label {
            display: block;
            margin-bottom: 10px;
        }

        .custom-floating-contact-form_personalized input,
        .custom-floating-contact-form_personalized select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .custom-floating-contact-form_personalized button {
            background: linear-gradient(to right, #FA7936, #9900EB);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .font-1 a {
            color: black !important;
            text-decoration: none;
        }

        .custom-floating-contact-form_personalized button:hover {
            background: linear-gradient(to right, #FA7936, #9900EB);
        }

        .custom-floating-contact-form_personalized .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        @media only screen and (max-width: 767px) {
            .custom-floating-contact-form_personalized .close-btn {
                top: 50px;
                /* Add top padding for close button only on mobile */
            }
        }

        .custom-floating-contact-form_personalized a {
            text-decoration: none !important;
            color: inherit;
        }
        .custom-floating-home-form_personalized {
            max-width: 80%;
            margin: 10px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .form-column {
            flex: 1;
            margin: 10px;
            text-align: left;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                align-items: center;
            }

            .form-column {
                margin: 10px 0;
                width: 100%;
            }
        }


        @media only screen and (max-width: 767px) {
            .custom-floating-home-form_personalized {
                right: 0;
                width: 100%;
                max-height: 100vh;
                overflow-y: auto;
                padding-top: 8px;
            }
        }

        .custom-floating-home-form_personalized h2 {
            margin-top: 30px;
        }

        .custom-floating-home-form_personalized label {
            display: block;
            margin-bottom: 10px;
        }

        .custom-floating-home-form_personalized input,
        .custom-floating-home-form_personalized select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .custom-floating-home-form_personalized button {
            background: linear-gradient(to right, #FA7936, #9900EB);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .font-1 a {
            color: white !important;
            text-decoration: none;
        }

        .custom-floating-home-form_personalized button:hover {
            background: linear-gradient(to right, #FA7936, #9900EB);
        }

        .custom-floating-home-form_personalized .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        @media only screen and (max-width: 767px) {
            .custom-floating-home-form_personalized .close-btn {
                top: 50px;
            }
        }

        .custom-floating-home-form_personalized a {
            text-decoration: none !important;
            color: inherit;
        }
        .custom-floating-contact-btn_personalized {
            position: fixed;
            bottom: 100px;
            right: 20px;
            background: linear-gradient(to right, #FA7936, #9900EB);
            color: white;
            padding: 20px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            z-index: 999;
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.1);

            /* Add animation properties */
            /* animation: jumpAnimation 0.5s infinite alternate ease-in-out; */
            animation: jumpAnimation 0.5s infinite alternate ease-in-out;
        }

        .custom-floating-contact-btn_personalized:hover {
            background: linear-gradient(to right, #FA7936, #9900EB);
        }

        /* Define the animation keyframes */
        @keyframes jumpAnimation {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>