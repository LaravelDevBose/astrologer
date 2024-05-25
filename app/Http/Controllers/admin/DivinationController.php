<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pages;
use DB;
class DivinationController extends Controller
{
     public function divination()
    {
        $data=DB::table('pages')->where('role','divination')->first();
        // dd($data);
        
        // $data=DB::table('pages')->first();
        // dd($data);
    return view('Admin.pages.custom_pages.divination',compact('data'));
    }
    public function storedivination(Request $request)
    {
        $validatedData=$request->except(['_token']);
        // dd($validatedData);
        
        //  $validatedData = $request->validate([
        //     'heading' => 'required|string',
        //     'content' => 'required|string',
        //     'content2' => 'required|string',
        //     'button_text' => 'required|string',
        //     'button_url' => 'required|url',
        //     'content3' => 'required|string',
        //     'button2_text' => 'required|string',
        //     'button2_url' => 'required|url',
        // ]);

        // Find the Divination record by ID
        $id=$request->id;
        $divination = pages::findOrFail($id);

        // Update the record with the validated data
        $divination->update($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Divination updated successfully');
    }
    
    // $request->validate([
    // 'heading' => 'required|string|max:255',
    // 'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    // 'content' => 'required|string',
    // 'BannerImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    // 'bannertitle' => 'required|string|max:255',
    // 'content2' => 'required|string',
    // ]);
    
    // Save the data into the database
    // $dream = new pages;
    // $dream->pagename = $request->input('pagename');
    // $dream->h1 = $request->input('heading');
    // $dream->contant = $request->input('content');
    // $dream->banner_title = $request->input('bannertitle');
    // $dream->content2 = $request->input('content2');
    // $dream->role ='divination';
    
    
    // Upload and save the top image
    // $imagePath = $request->file('Image')->store('dream_images', 'public');
    // $dream->top_image = $imagePath;
    
    // // Upload and save the banner image
    // $bannerImagePath = $request->file('BannerImage')->store('dream_banners', 'public');
    // $dream->banner2_image = $bannerImagePath;
    
    // $dream->save();
    
    // return redirect()->back()->with('success', 'Dream added successfully!');
    
    
    
}
