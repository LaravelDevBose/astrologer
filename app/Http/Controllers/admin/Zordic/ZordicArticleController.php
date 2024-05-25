<?php

namespace App\Http\Controllers\admin\Zordic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ZordicSign;

class ZordicArticleController extends Controller
{
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
    $data = DB::table('zordic_articles')
    ->leftjoin('zordic_gender', 'zordic_gender.id', '=', 'zordic_articles.zordic_gender')
    ->leftjoin('zordic_sign', 'zordic_sign.id', '=', 'zordic_articles.zordicsign_id')
    ->select('zordic_articles.*', 'zordic_gender.gender', 'zordic_sign.title')
    ->latest()->get();
    
    return view('Admin/pages/zordic_article/list',compact('data'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
    $zordicgender=DB::table('zordic_gender')->get();
    $zordic_sign=DB::table('zordic_sign')->get();
    return view('Admin/pages/zordic_article/create',compact('zordicgender','zordic_sign'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
    'content' => 'required',
    ]);
    
    
    $check = DB::table('zordic_articles')->where('zordicsign_id',$request->zordicsign_id)->where('zordic_gender',$request->zordic_gender)->first();
    
    if($check){
    
     return redirect()->route('zordic-article')->with('error', 'Zordic article already exists');
     
    }else{
    
    try {
    DB::beginTransaction();
    
    $array = [
    'zordic_gender' => $request->zordic_gender,
    'zordicsign_id' => $request->zordicsign_id,
    'content' => $request->content,
    ];
    
    $data = DB::table('zordic_articles')->insert($array);
    
    DB::commit();
    
    return redirect()->route('zordic-article')->withSuccess('Zodiac article created successfully');
    } catch (\Exception $e) {
    DB::rollback();
    return back()->withErrors($e->getMessage())->withInput($request->all());
    }
    
    }
    
    }

    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        
    $data=DB::table('zordic_articles')->where('id',$id)->first();
    $zordicgender=DB::table('zordic_gender')->get();
    $zordic_sign=DB::table('zordic_sign')->get();
    
    return view('Admin/pages/zordic_article/edit',compact('data','zordicgender','zordic_sign'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request)
    {
    $validatedData = $request->validate([
    'content' => 'required',
    ]);
    
    try {
    DB::beginTransaction();
    
    $array = [
    'zordic_gender' => $request->zordic_gender,
    'zordicsign_id' => $request->zordicsign_id,
    'content' => $request->content,
    ];
    
    $where= array('id' => $request->edit_id);
    
    $data = DB::table('zordic_articles')->where($where)->update($array);
    
    DB::commit();
    
    return redirect()->route('zordic-article')->withSuccess('Zodiac article update successfully');
    } catch (\Exception $e) {
    DB::rollback();
    return back()->withErrors($e->getMessage())->withInput($request->all());
    }
    
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
    $where= array('id' => $id);
    $data = DB::table('zordic_articles')->where($where)->first();
    if($data){
    DB::table('zordic_articles')->where($where)->delete();
    return back()->withSuccess('Zodiac deleted successfully'); 
    }else{
     return back()->withErrors('Invalid Id'); 
    }
    
    }
    
    
    
}
