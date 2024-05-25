<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Horoscope;
use Illuminate\Http\Request;
use DB;
use Helper;
class CompatibilityController extends Controller
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
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as horoscopecategory'),'created_at')->where('type',3)->orderBy('id', 'DESC')->get();
        return view('Admin.pages.compatibility.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = DB::table('tags')->get();
        $horoscopeCategory = DB::table('horoscopecategory')->where('category_type',3)->get();
        return view('Admin.pages.compatibility.add',compact('horoscopeCategory','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'contant' => 'required',
            'horoscopecate_id' => 'required',
            'thumbImage' => 'required'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('horoscope')->where('title',$request->title)->where('type',3)->first();
            if ($data) {
                return back()->withErrors("This Compatibility already exits")->withInput($request->all());
            }

            print_r($request->hasFile('thumbImage'));

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/horoscopecategory', $input['thumbImage']);
              }

              DB::enableQueryLog();

              $Horoscope = Horoscope::make();
              $slug=Helper::createUrlSlug($request->title);
              $Horoscope->slug = $slug;
              $Horoscope->title = $request->title;
              $Horoscope->contant = $request->contant;
              $Horoscope->excerpt = $request->excerpt;
              $Horoscope->tags = $request->tags;
              $Horoscope->type = 3;
              $Horoscope->createdBy = 'admin';
              $Horoscope->horoscopecate_id = $request->horoscopecate_id;
             // if($request->hasFile('thumbImage'))
              $Horoscope->thumbImage = $input['thumbImage'];
              $Horoscope->save();
              
              DB::commit();
              return redirect()->route('Compatibility')->withSuccess('Compatibility created successfully');
           
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
        $horoscopeCategory = DB::table('horoscopecategory')->where('category_type',3)->get();
        return view('Admin.pages.compatibility.edit',compact('data','horoscopeCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'contant' => 'required',
            'horoscopecate_id' => 'required'
        ]);

        try{
            if($request->hasFile('thumbImage')) 
            {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/horoscopecategory', $input['thumbImage']);
            }

            $id=$request->id;
              $Horoscope = Horoscope::findOrFail($id);
              $Horoscope->title = $request->title;
              $Horoscope->contant = $request->contant;
              $Horoscope->excerpt = $request->excerpt;
              $Horoscope->tags = $request->tags;
              $Horoscope->horoscopecate_id = $request->horoscopecate_id;
              if($request->hasFile('thumbImage'))
              $Horoscope->thumbImage = $input['thumbImage'];
              $Horoscope->save();
              DB::commit();
              return redirect()->route('Compatibility')->withSuccess('Compatibility updated successfully');
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
        return back()->withSuccess('Compatibility deleted successfully');
    }

    public function UpdatesHoro()
    {
        $data = DB::table('horoscope')->get();
        foreach($data as $horo)
        {
            $slug=Helper::createUrlSlug($horo->title);
            DB::table('horoscope')->where('id',$horo->id)->update(['slug'=>$slug]);
        }
        
    }

}
