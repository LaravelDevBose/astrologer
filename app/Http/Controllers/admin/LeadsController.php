<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function CreateStatus()
    {
        return view('Admin.pages.Leads.CreateStatus');
    }
    
    public function StoreStatus(Request $request)
    {
        $validatedData = $request->validate([
            //'horoscopeDate' => 'required',
            'title' => 'required',
           // 'contant' => 'required',
        ]);
        
        try{
            DB::beginTransaction();

            $data = DB::table('leadstatus')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This leadstatus already exits")->withInput($request->all());
            }

            DB::table('leadstatus')->insert(['title'=>$request->title]);
             
              DB::commit();
              return redirect()->route('GetStatus')->withSuccess('leadstatus created successfully');

        }catch (\Exception $e){
            DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }
    }
   
    public function GetStatus()
    {
        $data = DB::table('leadstatus')->get();
        return view('Admin.pages.Leads.leadStatus',compact('data'));
    }

    public function destroy($id)
    {
        $data = DB::table('leadstatus')->where('id',$id)->delete();
        return redirect()->route('GetStatus')->withSuccess('leadstatus Deleted successfully');

    }

    public function GetLeads()
    {
        $data = DB::table('contact')->get();
        return view('Admin.pages.Leads.lead',compact('data'));
    }

   
}
