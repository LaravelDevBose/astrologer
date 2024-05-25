<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Yesnotarot;
class YesNoTarrotController extends Controller
{
     public function edit()
    {
    $data=DB::table('yes_no_tarot')->first();
    
    return view('Admin.pages.custom_pages.yes_no_tarot',compact('data'));
    }
    
    public function update(Request $request)
    {
        
    // Retrieve the Yes No data from the database using the id
    $tarot = Yesnotarot::find($request->input('id'));
    
    // Update the planet data with the new values
    $tarot->heading = $request->input('heading');
    $tarot->content = $request->input('content');
    
  
    $tarot->save();
    
    // Redirect back with a success message
    return redirect()->route('yes-no-tarot')->with('success', 'Tarot updated successfully');
    }
}
