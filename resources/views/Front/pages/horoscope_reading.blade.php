<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="Krishna Speak is a platform where you can get your free reading now. We provide you with the best astrology services."
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"  />
    <style>
        #dateRangePicker {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }
        body{
            background-image: url("{{ asset('assets/Background2.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body class="w-11/12 mx-auto px-4 py-10 md:p-10"  style=" ">
    <a href="{{ route('index') }}">
        <img src="{{ asset('assets/logo.png') }}" alt="" class="mx-auto" />
    </a>
    <div id="formBody" class="">
        <div id="page1" class="grid gap-14 grid-cols-2 lg:grid-cols-4 mt-14 page">
            <label class="flex items-center justify-center read-div" data-sign="aries" title="Aries">
                <img src="{{ asset('/assets/reading_signs/aries.png') }}" alt="Aries" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="taurus" title="Taurus">
                <img src="{{ asset('assets/reading_signs/taurus.png') }}" alt="Taurus" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="gemini" title="Gemini">
                <img src="{{ asset('assets/reading_signs/gemini.png') }}" alt="Gemini" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="cancer" title="Cancer">
                <img src="{{ asset('assets/reading_signs/cancer.png') }}" alt="Cancer" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="leo" title="Leo">
                <img src="{{ asset('assets/reading_signs/leo.png') }}" alt="Leo" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="virgo" title="Virgo">
                <img src="{{ asset('assets/reading_signs/virgo.png') }}" alt="Virgo" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="libra" title="Libra">
                <img src="{{ asset('assets/reading_signs/libra.png') }}" alt="Libra" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="scorpio" title="Scorpio">
                <img src="{{ asset('assets/reading_signs/scorpio.png') }}" alt="Scorpio" />
            </label>
            <label class="flex items-center justify-center read-div"  data-sign="sagittarius" title="Sagittarius">
                <img src="{{ asset('assets/reading_signs/sagittarius.png') }}" alt="Sagittarius" />
            </label>
            <label class="flex items-center justify-center read-div" data-sign="capricorn" title="Capricorn">
                <img src="{{ asset('assets/reading_signs/capricorn.png') }}" alt="Capricorn" />
            </label>
            <label class="flex items-center justify-center read-div" data-sign="aquarius" title="Aquarius">
                <img src="{{ asset('assets/reading_signs/aquarius.png') }}" alt="Aquarius" />
            </label>
            <label class="flex items-center justify-center read-div" data-sign="pisces" title="Pisces">
                <img src="{{ asset('assets/reading_signs/pisces.png') }}" alt="Pisces" />
            </label>
        </div>

        <div id="page2" class="content-2 mt-32 flex items-center justify-center page hidden" >
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">
                    Choose your Date of Birth
                </h1>
                <div class="flex justify-center mt-10">
                    <input
                            type="text"
                            id="dateRangePicker"
                            placeholder="Select Date"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    />
                </div>
                <div class="flex justify-center mt-10">
                    <button class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold next-btn" style="background-color: #34c2ff" >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="page3" class="content-2 mt-32 flex items-center justify-center page hidden">
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">Enter Your Birth Time</h1>
                <div class="flex justify-center mt-10">
                    <input
                            type="time"
                            id="timeInput"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    />
                </div>
                <div class="flex justify-center mt-10">
                    <button
                            class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold next-btn"
                            style="background-color: #34c2ff"
                    >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="page4" class="content-2 mt-32 flex items-center justify-center page hidden" >
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">Country of Birth</h1>
                <div class="flex justify-center mt-10">
                    <input
                            type="text"
                            id="countryInput"
                            placeholder="Enter Country"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    />
                </div>

                <div class="flex flex-col justify-center mt-10">
                    <h1 class="text-3xl text-center text-white">Town/City of Birth</h1>
                    <input
                            type="text"
                            id="cityInput"
                            placeholder="Enter City"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2 mt-10"
                    />
                </div>

                <div class="flex justify-center mt-10">
                    <button
                            class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold next-btn"
                            style="background-color: #34c2ff"
                    >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="page5" class="content-2 mt-32 flex items-center justify-center page hidden" >
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">Select Your Gender</h1>
                <div class="flex justify-center mt-10">
                    <select
                            id="genderInput"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    >
                        <option value="" disabled selected>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="flex justify-center mt-10">
                    <button
                            class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold next-btn"
                            style="background-color: #34c2ff"
                    >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="page6" class="content-2 mt-32 flex items-center justify-center page hidden">
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">Enter Your Full Name</h1>
                <div class="flex justify-center mt-10">
                    <input
                            type="text"
                            id="nameInput"
                            placeholder="Enter Name"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    />
                </div>
                <div class="flex justify-center mt-10">
                    <button
                            class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold next-btn"
                            style="background-color: #34c2ff"
                    >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="page7" class="content-2 mt-32 flex items-center justify-center page hidden">
            <div class="flex flex-col">
                <h1 class="text-3xl text-center text-white">
                    Enter Your Email Address
                </h1>
                <div class="flex justify-center mt-10">
                    <input
                            type="email"
                            id="emailInput"
                            placeholder="Enter Email"
                            class="w-full p-2 text-center rounded-lg bg-white text-black font-bold text-lg border-2"
                    />
                </div>
                <div class="flex justify-center mt-10">
                    <button
                            id="formSubmitButton"
                            class="mx-auto w-full p-3 px-8 rounded-lg bg-white text-white font-bold"
                            style="background-color: #34c2ff"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>

    </div>

    <div id="formSubmitting" class="content-2 mt-32 flex flex-col items-center justify-center hidden">
        <h1 class="text-4xl text-center text-white"> Please wait!</h1>
        <h1 class="text-4xl text-center text-white mt-4">
           While we process your request...
        </h1>
    </div>

    <div id="successResponse" class="content-2 mt-32 flex flex-col items-center justify-center hidden">
        <h1 class="text-4xl text-center text-white">Thank You!</h1>
        <h1 class="text-4xl text-center text-white mt-4">
            Your request submitted successfully. We will notify you via email.
        </h1>
    </div>

    <div id="errorResponse" class="content-2 mt-32 flex flex-col items-center justify-center hidden">
        <h1 class="text-4xl text-center text-red-600">Something Wrong!</h1>
        <div id="errorMsg" class="text-red-500 text-center mt-4 "></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        let curPage = 0;
        const pages = document.querySelectorAll(".page");
        const formData = new FormData();
        let selectedSign;
        const formSubmitting = $('#formSubmitting');
        const successResponse = $('#successResponse');
        const errorResponse = $('#errorResponse');

        pages.forEach((page) => {
            page.classList.add("hidden");
        });

        pages[curPage].classList.remove("hidden");

        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#dateRangePicker", {
                maxDate: "today",
                dateFormat: "d-m-Y",
            });
        });

        const nextPage = () => {
            // Store data from current page
            if (curPage === 0) {
                if (!selectedSign) {
                    alert("Please select a sign.");
                    return;
                }
            } else if (curPage === 1) {
                const selectedDate = document.getElementById("dateRangePicker").value;
                if (
                    !selectedDate ||
                    selectedDate === "Select Date" ||
                    selectedDate === ""
                ) {
                    alert("Please select a date.");
                    return;
                }
                formData.append('dateOfBirth', selectedDate);
            } else if (curPage === 2) {
                const enteredTime = document.getElementById("timeInput").value;
                if (!enteredTime || enteredTime.trim() === "") {
                    alert("Please enter your birth time.");
                    return;
                }
                formData.append('time', enteredTime);
            } else if (curPage === 3) {
                const enteredCountry = document.getElementById("countryInput").value;
                if (!enteredCountry || enteredCountry.trim() === "") {
                    alert("Please enter your country.");
                    return;
                }
                formData.append('country', enteredCountry);

                const enteredCity = document.getElementById("cityInput").value;
                if (!enteredCity || enteredCity.trim() === "") {
                    alert("Please enter your city.");
                    return;
                }
                formData.append('city', enteredCity);

            } else if (curPage === 4) {
                const selectedGender = document.getElementById("genderInput").value;
                if (!selectedGender || selectedGender.trim() === "") {
                    alert("Please select your Gender");
                    return;
                }
                formData.append('gender', selectedGender);
            } else if (curPage === 5) {
                const enteredName = document.getElementById("nameInput").value;
                if (!enteredName || enteredName.trim() === "") {
                    alert("Please enter your name.");
                    return;
                }
                formData.append('name', enteredName);
            }

            // Log form data when reaching the last page
            if (curPage === pages.length - 1) {
                console.log(formData);
                alert("Form submitted successfully!");
                pages[curPage].classList.add("hidden");
                // setTimeout(() => {
                //   window.location.href = "index.html";
                // }, 5000);
                return;
            }

            // Navigate to the next page
            if (curPage < pages.length - 1) {
                pages[curPage].classList.add("hidden");
                curPage++;
                pages[curPage].classList.remove("hidden");
            }
        };

        document.querySelectorAll(".read-div").forEach((div) => {
            div.addEventListener("click", function () {
                selectedSign = this.dataset.sign;
                formData.append('sign', this.dataset.sign);
                nextPage();
            });
        });

        document.querySelectorAll(".next-btn").forEach((btn) => {
            btn.addEventListener("click", nextPage);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#formSubmitButton").click(function(e) {
            e.preventDefault();
            formSubmitting.removeClass('hidden');
            successResponse.addClass('hidden');
            errorResponse.addClass('hidden');
            $('#formBody').addClass('hidden');


            const enteredEmail = document.getElementById("emailInput").value;
            if (!enteredEmail || enteredEmail.trim() === "") {
                alert("Please enter your email.");
                return false;
            }
            formData.append('email', enteredEmail);
            $.ajax({
                url: "{{ route('submit.horoscope.reading') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response)
                    if (response.status === 200) {
                        formSubmitting.addClass('hidden');
                        successResponse.removeClass('hidden');
                        errorResponse.addClass('hidden');
                        setTimeout(() => {
                          window.location.href = "{{ route('horoscope.reading') }}";
                        }, 5000);
                    } else {
                        formSubmitting.addClass('hidden');
                        successResponse.addClass('hidden');
                        errorResponse.removeClass('hidden');
                        $(`#errorMsg`).html(`
                            <h1 class="text-4xl text-center text-red-500 mt-4">  Your request not submitted . Please Refresh this page and Try again.</h1>
<!--                            <a href="" class="bg-blue-500 rounded text-white text-center px-10 py-4 text-md mt-10">Refresh</a>-->
                       `);
                        setTimeout(() => {
                            window.location.href = "{{ route('horoscope.reading') }}";
                        }, 5000);
                    }
                },
                error: function(xhr, status, error) {
                    formSubmitting.addClass('hidden');
                    successResponse.addClass('hidden');
                    errorResponse.removeClass('hidden');
                    if (xhr.status === 422) {
                        $('#errorMsg').html(xhr.responseJSON?.message ?? 'Please fill all required fields');
                    } else {
                        $(`#errorMsg`).html(`
                            <h1 class="text-4xl text-center text-red-500 mt-4">  Your request not submitted . Please Refresh this page and Try again.</h1>
                            <a href="" class="d-block bg-blue-500 rounded text-white text-center px-10 py-4 text-md mt-10">Refresh</a>
                       `);
                    }
                    setTimeout(() => {
                        window.location.href = "{{ route('horoscope.reading') }}";
                    }, 5000);
                }

            });
        });
    </script>
</body>
</html>
