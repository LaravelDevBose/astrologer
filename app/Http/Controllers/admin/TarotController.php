<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Tarot;
class TarotController extends Controller
{
    public function tarot()
    {
    $data=DB::table('tarots')->first();
    return view('Admin.pages.custom_pages.tarot',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the planet data from the database using the planet_id
    $tarot = Tarot::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->h1 = $request->input('h1');
    $tarot->page_name = 'definitions';
    $tarot->content_1 = $request->input('content_1');
    $tarot->h2 = $request->input('h2');
    $tarot->button_1_text = $request->input('button_1_text');
    $tarot->button_1_url = $request->input('button_1_url');
    $tarot->content_2 = $request->input('content_2');
    $tarot->button_2_text = $request->input('button_2_text');
    $tarot->button_2_url = $request->input('button_2_url');
    $tarot->content_3 = $request->input('content_3');
    $tarot->button_3_text = $request->input('button_3_text');
    $tarot->button_3_url = $request->input('button_3_url');
    $tarot->content_4 = $request->input('content_4');
    $tarot->button_4_text = $request->input('button_4_text');
    $tarot->button_4_url = $request->input('button_4_url');
    $tarot->content_5 = $request->input('content_5');
    $tarot->button_5_text = $request->input('button_5_text');
    $tarot->button_5_url = $request->input('button_5_url');
    // Update other fields
    
    // Check if a new image is provided and update the image field accordingly
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    
    // Use 'public' disk and specify the directory within that disk
    $file->storeAs('uploads/tarot_images', $fileName, 'public');
    
     $tarot->image = $fileName;
    }

    
    // Save the updated planet data
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('tarot')->with('success', 'Tarot updated successfully');
    }
}
