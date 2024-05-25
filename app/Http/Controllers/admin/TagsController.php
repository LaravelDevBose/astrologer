<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use DB;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tags::all();
        return view('Admin.pages.tags.tags',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.pages.tags.createtags');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('tags')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Tags already exits")->withInput($request->all());
            }

              $Horoscope = Tags::make();
              $Horoscope->title = $request->title;
              $Horoscope->save();
              DB::commit();
              return redirect()->route('tags')->withSuccess('Tags created successfully');

        }catch (\Exception $e){
            DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tags::findOrFail($id);
        return view('Admin.pages.tags.edit-tags',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();
              $Horoscope = Tags::findOrFail($id);
              $Horoscope->title = $request->title;
              $Horoscope->save();
              DB::commit();
              return redirect()->route('tags')->withSuccess('Tags updated successfully');
        }catch (\Exception $e){
            DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Tags::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Tags deleted successfully');
    }
}
