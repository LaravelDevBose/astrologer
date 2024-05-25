<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\DailyTarot;
class DailytarotController extends Controller
{
     public function edit()
    {
    $data= DB::table('daily_tarots')->first();
    return view('Admin.pages.custom_pages.daily-tarot',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the planet data from the database using the planet_id
    $tarot = DailyTarot::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->heading = $request->input('heading');
    $tarot->content = $request->input('content');
    
    // Save the updated planet data
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('daily-tarot-reading')->with('success', 'Daily Tarot updated successfully');
    }
}
