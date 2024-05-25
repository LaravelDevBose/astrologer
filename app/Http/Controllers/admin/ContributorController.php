<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contributor;
use Illuminate\Http\Request;
use DB;

class ContributorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('contributor')->get();
        return view('Admin.pages.contributor.contributor',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.pages.contributor.createcontributor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'profilepic'  =>'required|max:20480'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('contributor')->where('name',$request->title)->first();
            if ($data) {
                return back()->withErrors("This contributor already exits")->withInput($request->all());
            }

            if($request->hasFile('profilepic')) 
            {
                $files = $request->file('profilepic');
                $img_ext = $files->getClientOriginalExtension();
                $input['profilepic'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/contributor', $input['profilepic']);
            }
             
              $Contributor = Contributor::make();
              $Contributor->name = $request->name;
              $Contributor->position = $request->position;
              if($request->hasFile('profilepic'))
              $Contributor->profilepic = $input['profilepic'];
              $Contributor->save();
              DB::commit();
              return redirect()->route('contributor')->withSuccess('Contributor created successfully');
           
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
        $data = Contributor::findOrFail($id);
        return view('Admin.pages.contributor.edit-contributor',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'profilepic'  =>'required|max:20480'
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();
            
           // $input['Image']='';
        
            if($request->hasFile('profilepic')) 
            {
                $files = $request->file('profilepic');
                $img_ext = $files->getClientOriginalExtension();
                $input['profilepic'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/contributor', $input['profilepic']);
            }
             
              $Contributor = Contributor::findOrFail($id);
              $Contributor->name = $request->name;
              $Contributor->position = $request->position;
              if($request->hasFile('profilepic'))
              $Contributor->profilepic = $input['profilepic'];
              $Contributor->save();
              DB::commit();
              return redirect()->route('contributor')->withSuccess('Contributor updated successfully');
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
        $data = Contributor::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Contributor deleted successfully');
    }
}
