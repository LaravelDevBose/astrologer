<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\zordiacModel;
use DB;
class ZodicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('zordic')->orderBy('id', 'DESC')->get();
        return view('Admin.pages.zordic',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getdisplayOrders=DB::table('zordic')->select('displayOrder')->get()->toArray();
        foreach($getdisplayOrders as $val)
        {
            $displayOrders[]=$val->displayOrder;
        }
        $getdisplayOrders=  $displayOrders;
        return view('Admin.pages.createZordic',compact('getdisplayOrders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'displayOrder' => 'required',
            'Image'  =>'required|max:20480'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('zordic')->where('Name',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Zodiac already exits")->withInput($request->all());
            }

            if($request->hasFile('Image')) {
                $files = $request->file('Image');
                $img_ext = $files->getClientOriginalExtension();
                $input['Image'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/zordiac', $input['Image']);
              }
              $zordiac = zordiacModel::make();
              $zordiac->Name = $request->title;
              $zordiac->slug = $request->Name;
              $zordiac->Description = $request->description;
              $zordiac->displayOrder = $request->displayOrder;
              $zordiac->Image = $input['Image'];
              $zordiac->save();
              DB::commit();
              return redirect()->route('Zordic')->withSuccess('Zodiac created successfully');
           
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
        $data = zordiacModel::findOrFail($id);
        $getdisplayOrders=DB::table('zordic')->select('displayOrder')->get()->toArray();
        foreach($getdisplayOrders as $val)
        {
            $displayOrders[]=$val->displayOrder;
        }
        $getdisplayOrders=  $displayOrders;
        return view('Admin.pages.edit-zodic',compact('data','getdisplayOrders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'displayOrder' => 'required',
           // 'Image'  =>'required|max:20480'
        ]);

        try{
            $id=$request->zodic_id;
            DB::beginTransaction();
            
           // $input['Image']='';
        
            if($request->hasFile('Image')) 
            {
                $files = $request->file('Image');
                $img_ext = $files->getClientOriginalExtension();
                $input['Image'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/zordiac', $input['Image']);
            }
             
              $zordiac = zordiacModel::findOrFail($id);
              $zordiac->Name = $request->title;
              $zordiac->Description = $request->description;
              $zordiac->displayOrder = $request->displayOrder;
              if($request->hasFile('Image'))
              $zordiac->Image = $input['Image'];
              $zordiac->save();
              DB::commit();
              return redirect()->route('Zordic')->withSuccess('Zodiac updated successfully');
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
        $data = zordiacModel::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Zodiac deleted successfully');
    }
    
    
}
