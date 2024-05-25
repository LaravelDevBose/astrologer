<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ZordicCompatibility;
use Illuminate\Http\Request;
use DB;

class ZordicCompatibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ZordicCompatibility::orderBy('id', 'DESC')->get();
        return view('Admin.pages.zordiccompatibility.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zordicCompatibility = DB::table('zordiccompatibility')->get();
        return view('Admin.pages.zordiccompatibility.add',compact('zordicCompatibility'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'from_date'  =>'required',
            'to_date'  =>'required',
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('zordiccompatibility')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Zordic compatibility already exits")->withInput($request->all());
            }

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/zordiccompatibility', $input['thumbImage']);
              }

              $title=explode(' ',$request->title);
             
              $ZordicCompatibility = ZordicCompatibility::make();
              $ZordicCompatibility->title = $request->title;
              $ZordicCompatibility->from_date = $request->from_date;
              $ZordicCompatibility->to_date = $request->to_date;
              $ZordicCompatibility->slug = implode("-",$title);
             if($request->hasFile('thumbImage'))
              $ZordicCompatibility->thumbImage = $input['thumbImage'];
              $ZordicCompatibility->save();
              DB::commit();
              return redirect()->route('ZordicCompatibility')->withSuccess('Zordic Compatibility created successfully');
           
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
        $data = ZordicCompatibility::findOrFail($id);
        return view('Admin.pages.zordiccompatibility.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'from_date'  =>'required',
            'to_date'  =>'required',
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
                $path = $files->storeAs('public/zordiccompatibility', $input['thumbImage']);
            }
             
              $ZordicCompatibility = ZordicCompatibility::findOrFail($id);
              $ZordicCompatibility->title = $request->title;
              $ZordicCompatibility->from_date = $request->from_date;
              $ZordicCompatibility->to_date = $request->to_date;
              if($request->hasFile('thumbImage'))
              $ZordicCompatibility->thumbImage = $input['thumbImage'];
              $ZordicCompatibility->save();
              DB::commit();
              return redirect()->route('ZordicCompatibility')->withSuccess('Zordic Compatibility updated successfully');
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
        $data = ZordicCompatibility::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Zordic Compatibility deleted successfully');
    }
}
