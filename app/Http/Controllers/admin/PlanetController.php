<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Planet;
use App\Models\AllPagePlanet;
class PlanetController extends Controller
{
    public function index()
    {
    $data=DB::table('planets')->get();
    return view('Admin/pages/planets/list',compact('data'));
    }
    
    public function create()
    {
    return view('Admin/pages/planets/create');
    }
    
    public function store(Request $request)
    {
     
    $check = DB::table('planets')
    ->whereRaw('LOWER(title) = ? OR UPPER(title) = ?', [strtolower($request->title), strtoupper($request->title)])
    ->first();

    if($check){
    return redirect()->back()->with('error', 'Title already exists');
    }else{
        
    // Validate the input data
    $validatedData = $request->except(['_token']);
    
    
    // Validate the input data
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    
    // Use 'public' disk and specify the directory within that disk
    $file->storeAs('uploads/planet_images', $fileName, 'public');
    
    $validatedData['image'] = $fileName;
    }

    
    
    Planet::create($validatedData);
    
    // Redirect back with a success message
    return redirect()->back()->with('success', 'Planet Created successfully');
    }
    
    }
    
    public function edit(string $id)
    {
    $data=DB::table('planets')->where('id',$id)->first();
    return view('Admin/pages/planets/edit',compact('data'));
    }
    
    
    public function destroy(string $id)
    {
    DB::table('planets')->where('id',$id)->delete();
    return back()->with('success','Planets Deleted successfully');
    }
    public function update(Request $request)
    {
    // Retrieve the planet data from the database using the planet_id
    $planet = Planet::find($request->input('planet_id'));
    
    // Update the planet data with the new values
    $planet->title = $request->input('title');
    $planet->heading = $request->input('heading');
    $planet->content = $request->input('content');
    $planet->named_for = $request->input('named_for');
    $planet->glyph = $request->input('glyph');
    $planet->ruler_of = $request->input('ruler_of');
    $planet->sign_of_dignity = $request->input('sign_of_dignity');
    $planet->sign_of_detriment = $request->input('sign_of_detriment');
    $planet->sign_of_exaltation = $request->input('sign_of_exaltation');
    $planet->sign_of_fall = $request->input('sign_of_fall');
    $planet->physical_body = $request->input('physical_body');
    $planet->changes_sign = $request->input('changes_sign');
    // Update other fields
    
    // Check if a new image is provided and update the image field accordingly
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    
    // Use 'public' disk and specify the directory within that disk
    $file->storeAs('uploads/planet_images', $fileName, 'public');
    
     $planet->image = $fileName;
    }

    
    // Save the updated planet data
    $planet->save();
    
    // Redirect back with a success message
    return redirect()->route('planet')->with('success', 'Planet updated successfully');
    }
    
    
    // for pages
    public function planets()
    {
    $data=DB::table('backend_planets')->first();
    return view('Admin.pages.custom_pages.planet',compact('data'));
    }
    
    
    public function planetsupdate(Request $request)
    {
    // Get the planet by ID
    $planet = AllPagePlanet::findOrFail($request->input('id'));
    
    // Update the planet data
    $planet->title = $request->input('title');
    $planet->heading = $request->input('heading');
    $planet->content = $request->input('content');
    $planet->bottom_content = $request->input('bottom_content');
    
    // Handle image update if a new image is provided
    if ($request->hasFile('image')) {
    // Generate a unique filename based on timestamp and client's file extension
    $timestamp = time();
    $extension = $request->file('image')->getClientOriginalExtension();
    $imageName = $timestamp . '.' . $extension;
    
    // Upload the new image
    $imagePath = $request->file('image')->storeAs($imageName);
    $planet->image = $imagePath;
    }
    
    // Save the changes
    $planet->save();
    
    // Redirect with a success message
    return redirect()->back()->with('success', 'Planet updated successfully.');
    }
    
    }
