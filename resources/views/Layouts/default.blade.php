<?php

// app/Http/Controllers/PersonalizedHoroscopeController.php

namespace App\Http\Controllers;

use App\Models\PersonalisedHoroscopeData;
use Illuminate\Http\Request;

class PersonalizedHoroscopeController extends Controller
{
    public function showForm()
    {
        return view('Front.horoscope');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'birthdate' => 'required|date',
            'birth_year' => 'required|integer',
            'birth_time_know' => 'required|string|in:yes,no',
            'birth_time' => $request->input('birth_time_know') == 'yes' ? 'required|string' : '',
        ]);

        // Create a new instance of the model and fill it with validated data
        $horoscopeData = new PersonalisedHoroscopeData($validatedData);

        // Save the data to the database
        $horoscopeData->save();

        // Send email
        $to = "shuja7058@gmail.com";
        $subject = "New Horoscope Submission";
        $message = "New horoscope details:\nZodiac Sign: {$validatedData['zodiac_sign']}\nBirthdate: {$validatedData['birthdate']}\n...";
        $headers = "From: webmaster@example.com";

        mail($to, $subject, $message, $headers);

        // Display a success message
        return "Data submitted successfully and email sent!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

@include('Front.includes.head')

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
        color: black !important;
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

<body>

    @include('Front.includes.top_header')
    @include('Front.includes.header')

    @yield('content')

    @include('Front.includes.floatingform')

    @include('Front.includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#homeFromSubmit").click(function(e) {
            e.preventDefault();
            let form = $('#homeFrom')[0];
            submitForm(form, 'reqFormWrrapper', 'homeReqFormRes', 'reqFormError');
            $('#homeFromSubmit').prop("disabled", true).html('<i class="fas fa-spinner fa-spin"></i>');
        });
        $("#floatingFormBtn").click(function(e) {
            e.preventDefault();
            let form = $('#floatingForm')[0];
            submitForm(form, 'floatingWarrp', 'floatingFormRes', 'floatingError');
            $('#floatingFormBtn').prop("disabled", true).html('<i class="fas fa-spinner fa-spin"></i>');
        });

        function submitForm(reqData, formWapperId, formResId, reqFormError) {
            let data = new FormData(reqData);
            $(`#${reqFormError}`).html('');
            $(`#${formResId}`).html('');
            $.ajax({
                url: "{{ route('submitHoroscopeForm') }}",
                type: "POST",
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    $(`#${formWapperId}`).addClass('d-none');
                    if (response.status === 200) {
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-success">${response.message}</h3>
                       `);
                    } else {
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-danger">Something Wrong. Reload and Try again.</h3>
                       `);
                        $('#homeFromSubmit').prop("disabled", false).html('Submit');
                        $('#floatingFormBtn').prop("disabled", false).html('Submit');
                    }
                },
                error: function(xhr, status, error) {
                    $('#homeFromSubmit').prop("disabled", false).html('Submit');
                    $('#floatingFormBtn').prop("disabled", false).html('Submit');
                    if (xhr.status === 422) {
                        $(`#${reqFormError}`).html(xhr.responseJSON?.message ?? 'Please fill all required fields');
                    } else {
                        $(`#${formWapperId}`).addClass('d-none');
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-danger">Something Wrong. Reload and Try again.</h3>
                       `);
                    }
                }

            });
        }
    </script>

</body>

</html>