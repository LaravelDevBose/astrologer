<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Free3cardreading;
class Free3cardController extends Controller
{
    public function edit()
    {
    $data=DB::table('free_3_card_reading')->first();
    
    
    return view('Admin.pages.custom_pages.free_3_card_reading',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the planet data from the database using the planet_id
    $tarot = Free3cardreading::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->heading = $request->input('heading');
    $tarot->content = $request->input('content');
    $tarot->content2 = $request->input('content2');
    
    
    // Update other fields
    
    // Check if a new image is provided and update the image field accordingly
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    
    // Use 'public' disk and specify the directory within that disk
    $file->storeAs('uploads/free3_card_images', $fileName, 'public');
    
     $tarot->image = $fileName;
    }

    
    // Save the updated planet data
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('free-3-card-reading')->with('success', 'Tarot updated successfully');
    }
}
