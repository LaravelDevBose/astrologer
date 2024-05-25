<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HoroscopeCategory;
use Illuminate\Http\Request;
use DB;

class HoroscopeCategoryController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HoroscopeCategory::where('category_type',1)->orderBy('id', 'DESC')->get();
        return view('Admin.pages.horoscopecategory.horoscopecategory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horoscopeCategory = DB::table('horoscopecategory')->get();
        return view('admin.pages.horoscopecategory.createhoroscopecategory',compact('horoscopeCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
           // 'contant' => 'required',
           // 'thumbImage'  =>'required|max:20480',
           // 'horoscopeDate'=>'required',
           // 'color'=>'required'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('horoscopecategory')->where('title',$request->title)->where('category_type',1)->first();
            if ($data) {
                return back()->withErrors("This Horoscope Category already exits")->withInput($request->all());
            }

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/horoscopecategory', $input['thumbImage']);
              }

              $title=explode(' ',$request->title);
             
              $HoroscopeCategory = HoroscopeCategory::make();
              $HoroscopeCategory->title = $request->title;
              $HoroscopeCategory->category_type = 1;
              $HoroscopeCategory->slug = implode("-",$title);
           //   $HoroscopeCategory->contant = $request->contant;
             // $HoroscopeCategory->horoscopeDate = $request->horoscopeDate;
             if($request->hasFile('thumbImage'))
              $HoroscopeCategory->thumbImage = $input['thumbImage'];
              $HoroscopeCategory->save();
              DB::commit();
              return redirect()->route('HoroscopeCategory')->withSuccess('Horoscope Category created successfully');
           
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
        $data = HoroscopeCategory::findOrFail($id);
        return view('Admin.pages.horoscopecategory.edit-horoscopecategory',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            //'horoscopeDate' => 'required',
            'title' => 'required',
           // 'contant' => 'required',
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();
            
           // $input['Image']='';
        
            if($request->hasFile('thumbImage')) 
            {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/horoscopecategory', $input['thumbImage']);
            }
             
              $HoroscopeCategory = HoroscopeCategory::findOrFail($id);
              $HoroscopeCategory->title = $request->title;
             // $HoroscopeCategory->contant = $request->contant;
             // $HoroscopeCategory->horoscopeDate = $request->horoscopeDate;
              if($request->hasFile('thumbImage'))
              $HoroscopeCategory->thumbImage = $input['thumbImage'];
              $HoroscopeCategory->save();
              DB::commit();
              return redirect()->route('HoroscopeCategory')->withSuccess('Horoscope Category updated successfully');
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
        $data = HoroscopeCategory::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Horoscope Category deleted successfully');
    }
}
