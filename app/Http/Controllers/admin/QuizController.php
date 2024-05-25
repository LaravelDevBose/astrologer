<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Quiz;
class QuizController extends Controller
{
   public function addquiz(){
   return view('Admin.pages.addquiz');
   }
   public function storequiz(Request $request){
      $request->validate([
        'questions' => 'required',
        'answers.*' => 'required',
        'thumbImage.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $quiz = new Quiz([
        'questions' => $request->input('questions'),
         'title' => $request->input('title'),
          'description' => $request->input('description'),
        'answers' => json_encode($request->input('answers')),
    ]);

    // if ($request->hasFile('thumbImage')) {
    //     $imagePath = $request->file('thumbImage')->store('quiz_images', 'public');
    //     $quiz->quiz_image = $imagePath;
    // }
if ($request->hasFile('thumbImage')) {
        $imagePaths = [];
        foreach ($request->file('thumbImage') as $file) {
            $imagePath = $file->store('quiz_images', 'public');
            $imagePaths[] = $imagePath;
        }
        // Save the image paths in the database
        $quiz->image_path = json_encode($imagePaths);
    }
    if ($request->hasFile('featured_image')) {
    $featured_images = []; // Use a new array to store multiple file paths

    foreach ($request->file('featured_image') as $file) {
        $path = $file->store('featured_image', 'public');
        $featured_images[] = $path; // Add the path to the array
    }

    // Save the image paths in the database
    $quiz->featured_image = json_encode($featured_images);
}


    $quiz->save();

    return redirect()->back()->with('success', 'Quiz added successfully');
}
   
}
