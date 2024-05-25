<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pages;
use DB;
class DreamController extends Controller
{
    
    public function dream()
    {
        $data = pages::where('pagename','dream')->first();
        // dd($data);
        // $data=DB::table('pages')->first();
         
    return view('Admin.pages.custom_pages.dream',compact('data'));
    }
    
    public function storedream(Request $request)
    {
        $validatedData=$request->except(['_token']);
        // dd($validatedData);
        
        // $validatedData = $request->validate([
        //     'h2' => 'required|string',
        //     'h3' => 'string',
        //     'contant' => 'required|string',
        //     'button_text' => 'required|string',
        //     'button_url' => 'required|string',
        //     'button2_text' => 'string',
        //     'button2_url' => 'string',
        //     'content2' => 'string',
        //     'content3' => 'string',
        //     'BannerImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming BannerImage is the name of your file input
        // ]);

        // Find the Dream by ID
         $id = $request->id;
        $dream = pages::find($id);

        // Update the Dream model with the validated data
        $dream->update($validatedData);

        // Handle BannerImage update
        if ($request->hasFile('BannerImage')) {
            // Delete the old image file
            Storage::delete($dream->image);

            // Store the new image file
            $dream->image = $request->file('BannerImage')->store('dreams'); // Adjust the storage path as needed
            $dream->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Dream updated successfully.');
    }
    
    
        
        //  $validatedData = $request->validate([
        //     'heading' => 'required|string',
        //     'Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for Image
        //     'content' => 'required|string',
        //     'BannerImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for BannerImage
        //     'bannertitle' => 'required|string',
        //     'content2' => 'required|string',
        // ]);

        // Find the Dream model instance
       
           
            

        // Find the Dream model instance
        // $dream = pages::find($id);

        // Update the model with the validated data
        //  if ($dream) {
        // // Update the model with the validated data
        // $dream->update($validatedData);

        // Redirect with success message
    //     return redirect()->back()->with('success', 'Dream updated successfully');
    // } else {
    //     // Handle the case where the record is not found (optional)
    //     return redirect()->back()->with('error', 'Dream not found');
    // }
    
    
    
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
    
    // // Upload and save the top image
    // $imagePath = $request->file('Image')->store('dream_images', 'public');
    // $dream->top_image = $imagePath;
    
    // // Upload and save the banner image
    // $bannerImagePath = $request->file('BannerImage')->store('dream_banners', 'public');
    // $dream->banner2_image = $bannerImagePath;
    
    // $dream->save();
    
    // return redirect()->back()->with('success', 'Dream added successfully!');
    
    public function dreamDictionary()
    {
        $data = pages::where('role','dream_dictionary')->first();
        // dd($data);
        
    return view('Admin.pages.custom_pages.dream-dictionary',compact('data'));
    }
    
    
    public function storeDreamDictionary(Request $request)
    {
        
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
    }
    }
    
    
    
    
    }
    
