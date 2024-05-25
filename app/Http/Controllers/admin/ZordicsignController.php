<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ZordicSign;
class ZordicsignController extends Controller
{
    
    //   ================ordic Sign Section===========  
    public function addzordicsign()
    {
    $zordicData = DB::table('zordic')->get();
    return view('Admin.pages.addzordicsign',compact('zordicData'));
    }
    
    public function storezordicsign(Request $request)
    {
        
    $validatedData = $request->validate([
    'title' => 'required',
    'date' => 'required',
    'zodiac_symbol' => 'required',
    'element' => 'required',
    'ruling_planet' => 'required',
    'ruling_house' => 'required',
    'quality' => 'required',
    'polarity' => 'required',
    'power_color' => 'required',
    'birthstones' => 'required',
    'flowers' => 'required',
    'key_traits' => 'required',
    'desires' => 'required',
    'compatible_signs' => 'required',
    'mantra' => 'required',
    'zordic_sign_description' => 'required',
    ]);
    
    $check = DB::table('zordic_sign')->where('zordic_id',$request->zordic_id)->first();
    
    if($check){
    
     return redirect()->route('showzordicsign')->with('error', 'Zordic sign already exists');
     
    }else{
        
    // Validate the form data
    $validatedData = $request->except([
    '_token'
    ]);
    
    // Handle file upload for zodic_icon
    if ($request->hasFile('zordic_icon')) {
    $file = $request->file('zordic_icon');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->storeAs(public_path('uploads/zordic_icons'), $fileName);
    
    $validatedData['zordic_icon'] = $fileName;
    }
    
    // Insert data into the database
    ZordicSign::create($validatedData);
    
    // Redirect or return a response
    return redirect()->route('showzordicsign')->with('success', 'Zordic Sign added successfully');
    }
    
    }
    
    public function showzordicsign(){
    $data=DB::table('zordic_sign')->latest()->get();
    return view('Admin.pages.zordicsign.zordic_sign',compact('data'));
    }
    
    public function editzordicsign(string $id){
    $data=DB::table('zordic_sign')->where('id',$id)->first();
    $zordicData = DB::table('zordic')->get();
    return view('Admin.pages.zordicsign.zordicsignedit',compact('data','zordicData'));
    }
    
    public function updatezordicsign(Request $request , $id)
    {
        
    $validatedData = $request->validate([
    'title' => 'required',
    'date' => 'required',
    'zodiac_symbol' => 'required',
    'element' => 'required',
    'ruling_planet' => 'required',
    'ruling_house' => 'required',
    'quality' => 'required',
    'polarity' => 'required',
    'power_color' => 'required',
    'birthstones' => 'required',
    'flowers' => 'required',
    'key_traits' => 'required',
    'desires' => 'required',
    'compatible_signs' => 'required',
    'mantra' => 'required',
    'zordic_sign_description' => 'required',
    ]);
    
    $data= $request->except(['_token']);
    
    $zordicSignId = $data['zordicsign_id'];
    
    DB::table('zordic_sign')->where('id',$zordicSignId)->update([
    'title'=>$request->title,
    'date'=>$request->date,
    'zodiac_symbol'=>$request->zodiac_symbol,
    'element' =>$request->element,
    'ruling_planet'=>$request->ruling_planet,
    'quality'=>$request->quality,
    'polarity'=>$request->polarity,
    'power_color'=>$request->power_color,
    'birthstones'=>$request->birthstones,
    'flowers'=>$request->flowers,
    'key_traits'=>$request->key_traits,
    'desires'=>$request->desires,
    'compatible_signs'=>$request->compatible_signs,
    'mantra'=>$request->mantra,
    'zordic_sign_description'=>$request->zordic_sign_description,
    'created_at' => now(),
    'updated_at' => now(),
    ]);
    
    if ($request->hasFile('zordic_icon')) {
        $file = $request->file('zordic_icon');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads/zordic_icons', $fileName, 'public');
    
        DB::table('zordic_sign')->where('id', $id)->update([
            'zordic_icon' => $fileName,
        ]);
    }
    
    return redirect()->route('showzordicsign')->with('success','Zordic sign Updated Sucessfully');
    
    }
    
    public function Zordicdestroy($id){
    
    $data=DB::table('zordic_sign')->where('id',$id)->first();
    if ($data) {
    DB::table('zordic_sign')->where('id', $id)->delete();
    // Delete the Zodiac sign
    
    
    // Redirect with success message
    return redirect()->route('showzordicsign')->with('success', 'Zodiac sign deleted successfully.');
    } else {
    // Redirect with error message if the Zodiac sign is not found
    return redirect()->back('')->with('error', 'ZodiacSign Id sign not found.');
    }
    }
    
    

//   ================Gender Section===========    
    
    public function showgender()
    {
    $data=DB::table('zordic_gender')->get();
    return view('Admin.pages.showgender',compact('data'));
    }
    
    public function addzordicgender()
    {
    return view('Admin.pages.addzordicgender');
    }
    
    public function storezordicgender(Request $request)
    {
        
    $check = DB::table('zordic_gender')->where('gender',$request->gender)->first();
    
    if($check){
    return redirect()->route('showgender')->with('error','Gender already exists');
    }else{
    $data=$request->except(['_token']);
    DB::table('zordic_gender')->insert([
    'gender'=>$data['gender'],
    ]);
    return redirect()->route('showgender')->with('success','Gender created sucessfully');
    }
    
    }
    
    public function editZordicGender(string $id){
    $data=DB::table('zordic_gender')->where('id',$id)->first();
    return view('Admin.pages.editzordicgender',compact('data'));
    }
    
    public function updateZordicGender(Request $request)
    {
    $id = $request->edit_id;
    
    DB::table('zordic_gender')->where('id',$id)->update([
    'gender'=>$request->gender,
    ]);
    
    return redirect()->route('showgender')->with('success','Gender updated successfully!');
    
    }
    
    public function destroyZordicGender($id){
    
    $data=DB::table('zordic_gender')->where('id',$id)->first();
    if ($data) {
    DB::table('zordic_gender')->where('id', $id)->delete();
    
    return redirect()->back()->with('success', 'Gender deleted successfully.');
    } else {
    return redirect()->back('')->with('error', 'Gender Id not found.');
    }
    }
    
    // ====================End Here==================
    
   
    
    }
