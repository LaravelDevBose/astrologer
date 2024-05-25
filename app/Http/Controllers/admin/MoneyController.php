<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pages;
class MoneyController extends Controller
{
    public function moneywealth()
    {
       $data = pages::where('role','money')->first();
       
        // $data=DB::table('pages')->first();
        // dd($data);
    return view('Admin.pages.custom_pages.moneywealth',compact('data'));
    }
   public function update(Request $request)
{
    $id = $request->input('id');

    // Validate the input data
    $validatedData = $request->validate([
        'h2' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
        'contant' => 'required|string',
        // Add other validation rules as needed
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Generate a unique filename based on the current timestamp
        $imageExtension = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the 'images' folder with the unique filename
        $image->storeAs('app/images', $imageExtension);

        // Save the filename in the database
        $validatedData['image'] = $imageExtension;
    }

    // Update the record in the database
    $moneyAndWealth = pages::findOrFail($id);
    $moneyAndWealth->update($validatedData);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Money And Wealth updated successfully');
}


}
