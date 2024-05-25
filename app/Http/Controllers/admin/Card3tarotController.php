<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Card3tarrot;
class Card3tarotController extends Controller
{
   public function edit()
    {
    $data=DB::table('tarot_3_card_career')->first();
    return view('Admin.pages.custom_pages.tarot3_card',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the planet data from the database using the planet_id
    $tarot = Card3tarrot::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->h1 = $request->input('h1');
    $tarot->content = $request->input('content');
    $tarot->button_text = $request->input('button_text');
    $tarot->button_url = $request->input('button_url');
    $tarot->content2 = $request->input('content2');
    $tarot->button_text_2 = $request->input('button_text_2');
    $tarot->button_url_2 = $request->input('button_url_2');
    $tarot->content3 = $request->input('content3');
    
    // Update other fields
    
    // Check if a new image is provided and update the image field accordingly
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    
    // Use 'public' disk and specify the directory within that disk
    $file->storeAs('uploads/tarot3_card_images', $fileName, 'public');
    
     $tarot->image = $fileName;
    }

    
    // Save the updated planet data
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('3-card-tarot')->with('success', 'Tarot updated successfully');
    }
}
