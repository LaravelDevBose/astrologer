<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Tarot3cardlove;
class Card3tarotloveController extends Controller
{
     public function edit()
    {
    $data=DB::table('3_card_tarot_love_reading')->first();
    return view('Admin.pages.custom_pages.3_card_tarot_love_reading',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the planet data from the database using the planet_id
    $tarot = Tarot3cardlove::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->heading = $request->input('heading');
    $tarot->content = $request->input('content');
    $tarot->button_text = $request->input('button_text');
    $tarot->button_url = $request->input('button_url');
    $tarot->content_2 = $request->input('content_2');
    $tarot->button_2_text = $request->input('button_2_text');
    $tarot->button_2_url = $request->input('button_2_url');
    $tarot->content_3 = $request->input('content_3');
    
    
    // Save the updated planet data
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('3_card_tarot_love_reading')->with('success', 'Tarot Card Love updated successfully');
    }
}
