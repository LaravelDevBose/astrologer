<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pages;
use Storage;
class CrystalsController extends Controller
{
    public function crystals()
    {
       $data = pages::where('role','crystal')->first();
       
        // $data=DB::table('pages')->first();
        // dd($data);
    return view('Admin.pages.custom_pages.crystal',compact('data'));
    }
    
   public function storecrystals(Request $request)
{
    // dd($request->except(['_token']));
    $validatedData=$request->except(['_token']);
         
            $id = $request->id;

        // Find the Dream model instance
        $dream = pages::find($id);
        // dd($dream);

        // Update the model with the validated data
         if ($dream) {
        // Update the model with the validated data
        $dream->update($validatedData);

        // Redirect with success message
        return redirect()->back()->with('success', 'Dream updated successfully');
    } else {
        // Handle the case where the record is not found (optional)
        return redirect()->back()->with('error', 'Dream not found');
    }} 
}
