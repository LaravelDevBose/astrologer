<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Horoscope;
use Illuminate\Http\Request;
use DB;
class HoroscopeController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('horoscope')->select('id','title','excerpt','contant','horoscopeDate',DB::raw('(SELECT zordic.Name
        FROM zordic
        WHERE zordic.id = Zordic_id limit 1) as zodiac'),DB::raw('(SELECT horoscopecategory.title
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as horoscopecategory'),'created_at')->orderBy('id', 'DESC')->get();
        return view('Admin.pages.horoscope.horoscope',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zodiac = DB::table('zordic')->get();
        $tags = DB::table('tags')->get();
        $horoscopeCategory = DB::table('horoscopecategory')->get();
        return view('Admin.pages.horoscope.createhoroscope',compact('zodiac','horoscopeCategory','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'zodiac_id' => 'required',
            'horoscopeDate' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'contant' => 'required',
            'horoscopecate_id' => 'required'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('horoscope')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Horoscope already exits")->withInput($request->all());
            }

           
              $Horoscope = Horoscope::make();
              $Horoscope->title = $request->title;
              $Horoscope->excerpt = $request->excerpt;
              $Horoscope->contant = $request->contant;
              $Horoscope->Zordic_id = $request->zodiac_id;
              $Horoscope->horoscopeDate = $request->horoscopeDate;
              $Horoscope->horoscopecate_id = $request->horoscopecate_id;
              $Horoscope->save();
              DB::commit();
              return redirect()->route('Horoscope')->withSuccess('Horoscope created successfully');
           
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
        $data = Horoscope::findOrFail($id);
        $zodiac = DB::table('zordic')->get();
        $horoscopeCategory = DB::table('horoscopecategory')->get();
        return view('Admin.pages.horoscope.edit-horoscope',compact('data','zodiac','horoscopeCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'zodiac_id' => 'required',
            'horoscopeDate' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'contant' => 'required',
            'horoscopecate_id' => 'required',
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();
            
           // $input['Image']='';
        
          
             
              $Horoscope = Horoscope::findOrFail($id);
              $Horoscope->title = $request->title;
              $Horoscope->excerpt = $request->excerpt;
              $Horoscope->contant = $request->contant;
              $Horoscope->Zordic_id = $request->zodiac_id;
              $Horoscope->horoscopeDate = $request->horoscopeDate;
              $Horoscope->horoscopecate_id = $request->horoscopecate_id;
              $Horoscope->save();
              DB::commit();
              return redirect()->route('Horoscope')->withSuccess('Horoscope updated successfully');
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
        $data = Horoscope::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Horoscope deleted successfully');
    }
}
