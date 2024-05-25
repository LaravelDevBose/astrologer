<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Compatibility;
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
        $data = DB::table('compatibility')->select('id','title','excerpt','contant','compatibilityDate',DB::raw('(SELECT zordic.Name
        FROM zordic
        WHERE zordic.id = Zordic_id limit 1) as zodiac'),DB::raw('(SELECT compatibilitycategory.title
        FROM compatibilitycategory
        WHERE compatibilitycategory.id = compatibilitycate_id limit 1) as compatibilitycategory'),'created_at')->where('type',1)->orderBy('id', 'DESC')->get();
        return view('admin.pages.compatibility.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = DB::table('tags')->get();
        $compatibilityCategory = DB::table('compatibilitycategory')->where('category_type',1)->get();
        return view('admin.pages.compatibility.add',compact('compatibilityCategory','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'contant' => 'required',
            'compatibilitycate_id' => 'required',
            'thumbImage' => 'required'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('compatibility')->where('title',$request->title)->where('type',1)->first();
            if ($data) {
                return back()->withErrors("This Compatibility already exits")->withInput($request->all());
            }

           

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/compatibilitycategory', $input['thumbImage']);
              }

              DB::enableQueryLog();

              $Compatibility = Compatibility::make();
              $slug=Helper::createUrlSlug($request->title);
              $Compatibility->slug = $slug;
              $Compatibility->title = $request->title;
              $Compatibility->contant = $request->contant;
              $Compatibility->excerpt = $request->excerpt;
              $Compatibility->tags = $request->tags;
              $Compatibility->type = 1;
              $Compatibility->createdBy = 'admin';
              $Compatibility->compatibilitycate_id = $request->compatibilitycate_id;
             // if($request->hasFile('thumbImage'))
              $Compatibility->thumbImage = $input['thumbImage'];
              $Compatibility->save();
              
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
        $data = Compatibility::findOrFail($id);
        $compatibilityCategory = DB::table('compatibilitycategory')->where('category_type',1)->get();
        return view('admin.pages.compatibility.edit',compact('data','compatibilityCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'contant' => 'required',
            'compatibilitycate_id' => 'required'
        ]);

        try{
            if($request->hasFile('thumbImage')) 
            {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/compatibilitycategory', $input['thumbImage']);
            }

            $id=$request->id;
              $Compatibility = Compatibility::findOrFail($id);
              $Compatibility->title = $request->title;
              $Compatibility->contant = $request->contant;
              $Compatibility->excerpt = $request->excerpt;
              $Compatibility->tags = $request->tags;
              $Compatibility->compatibilitycate_id = $request->compatibilitycate_id;
              if($request->hasFile('thumbImage'))
              $Compatibility->thumbImage = $input['thumbImage'];
              $Compatibility->save();
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
        $data = Compatibility::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Compatibility deleted successfully');
    }

    public function UpdatesHoro()
    {
        $data = DB::table('compatibility')->get();
        foreach($data as $horo)
        {
            $slug=Helper::createUrlSlug($horo->title);
            DB::table('compatibility')->where('id',$horo->id)->update(['slug'=>$slug]);
        }
        
    }

}
