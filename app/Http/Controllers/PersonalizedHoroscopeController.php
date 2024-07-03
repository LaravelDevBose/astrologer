<?php

namespace App\Http\Controllers;

use App\Mail\HoroscopeReadingMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PersonalisedHoroscopeData;
use Illuminate\Support\Facades\Mail;
use App\Mail\Personalisedform;

class PersonalizedHoroscopeController extends Controller
{
    public function showForm()
    {
        return view('Front.horoscope'); // Adjust the view name if needed
    }

    public function submitForm(Request $request)
    {

        
        // Validate the form data (adjust validation rules as needed)
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required|date',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',

//            'birth_year' => 'required|integer',
//            'birth_time_know' => 'required',
//            'birth_time' => $request->input('birth_time_know') == 'yes' ? 'required_if:birth_time_know,yes' : '',
        ]);

        // Create a new PersonalisedHoroscopeData instance
        $horoscopeData = new PersonalisedHoroscopeData;
        $horoscopeData->name = $request->get('name');
        $horoscopeData->email = $request->get('email');
        $horoscopeData->birthdate = $request->get('birthdate');
        $horoscopeData->birth_year = $request->get('birth_year')?? Carbon::parse($request->get('birthdate'))->format('Y');
        $horoscopeData->birth_time_know = $request->get('birth_time_know')?? 'no';
        $horoscopeData->birth_time = $request->get('birth_time')??null;
        // Add more fields as needed

        // Save the data to the database
        $horoscopeData->save();

        // // Send email
        // $to = "shuja7058@gmail.com";
        // $subject = "New Horoscope Submission";
        // $message = "New horoscope details:\nZodiac Sign: {$request->get('zodiac_sign')}\nBirthdate: {$request->get('birthdate')}\n..."; // Include other details
        // $headers = "From: webmaster@example.com"; // You may customize this

        // mail($to, $subject, $message, $headers);

        Mail::to(env('ADMIN_EMAIL'))->send(new Personalisedform([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'birthdate' => $request->get('birthdate'),
            'birth_year' => $request->get('birth_year')?? Carbon::parse($request->get('birthdate'))->format('Y'),
            'birth_time_know' => $request->get('birth_time_know')?? "no",
            'birth_time' => $request->get('birth_time')?? "-",
            'gender' => $request->get('gender')??"-",
            'country' => $request->get('country')??"-",
            'city' => $request->get('city')??"-",
            ]));

        // Display a success message (you might need JavaScript for this)
        return response()->json([
            'status'=>200,
            'message'=>  "Data submitted successfully and email sent!"
        ]);
    }

    public function submitHoroscopeReading(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'sign' => 'required',
                'name' => 'required',
                'email' => 'required',
                'dateOfBirth' => 'required|date',
                'time' => 'required',
                'country' => 'required',
                'city' => 'required',
                'gender' => 'required',
            ]);

            Mail::to(env('ADMIN_EMAIL'))->send(new HoroscopeReadingMail([
                'sign' => $request->get('sign'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'gender' => $request->get('gender'),
                'birthdate' => $request->get('dateOfBirth'),
                'birth_time' => $request->get('time'),
                'country' => $request->get('country'),
                'city' => $request->get('city'),
            ]));
            return response()->json([
                'status'=>200,
                'message'=>  "Data submitted successfully and email sent!"
            ]);
        }catch (\Throwable $throwable){
            return response()->json([
                'status'=>400,
                'message'=>  "Something wrong. Please try again"
            ]);
        }
    }
}