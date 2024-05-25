<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ZordicChineseController extends Controller
{
    public function index()
    {
    $data=DB::table('chinese_zordics')->get();
    return view('Admin/pages/zordic_chinese/list',compact('data'));
    }
    
    public function create()
    {
    $chineseCategory = DB::table('chinese_zordics_categories')->get();
    return view('Admin/pages/zordic_chinese/create',compact('chineseCategory'));
    }
    
    public function store(Request $request)
    {
        
    $check = DB::table('chinese_zordics')->where('chinise_zordic_category_id',$request->chinise_zordic_category_id)->first();
    
    if($check){
    return redirect()->route('chinese-zordic')->with('error', 'Chinese zodiac category already exists');   
    }else{
        
    
    // Handle file upload for zodic_icon
    if ($request->hasFile('chinese_zodiac_icon')) {
    $file = $request->file('chinese_zodiac_icon');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->storeAs(public_path('uploads/chinese_zodiac_icons'), $fileName);
    
    $validatedData['chinese_zodiac_icon'] = $fileName;
    }else{
    $fileName = '';
    }
        
    
    $data=$request->except(['_token']);
    DB::table('chinese_zordics')->insert([
    'title'=>$data['title'],
    'year'=>$data['year'],
    'element'=>$data['element'],
    'yin_or_yang'=>$data['yin_or_yang'],
    'luckycolours'=>$data['luckycolours'],
    'luckynumbers'=>$data['luckynumbers'],
    'crystal'=>$data['crystal'],
    'flower'=>$data['flower'],
    'characteristic'=>$data['characteristic'],
    'content'=>$data['content'],
    'chinise_zordic_category_id'=>$data['chinise_zordic_category_id'],
    'chinese_zodiac_icon' => $fileName,
    ]);
    
    return redirect()->route('chinese-zordic')->with('success', 'Zodiac Chinese created successfully');
    
    }
    
    }
    
    public function destroy(string $id)
    {
    DB::table('chinese_zordics')->where('id',$id)->delete();
    return back()->with('success','Zodiac Chinese Deleted successfully');
    }
    
    public function edit(string $id)
    {
    $data=DB::table('chinese_zordics')->where('id',$id)->first();
    $chineseCategory = DB::table('chinese_zordics_categories')->get();
    return view('Admin/pages/zordic_chinese/edit',compact('data','chineseCategory'));
    }
    
    public function update(Request $request)
    {
    
    try {
    DB::beginTransaction();
    
    $array = [
    'title' => $request->title,
    'year' => $request->year,
    'element' => $request->element,
    'yin_or_yang' => $request->yin_or_yang,
    'luckycolours' => $request->luckycolours,
    'luckynumbers' => $request->luckynumbers,
    'crystal' => $request->crystal,
    'flower' => $request->flower,
    'characteristic' => $request->v,
    'content' => $request->content,
    'chinise_zordic_category_id' => $request->chinise_zordic_category_id,
    ];
    
    $data = $data = DB::table('chinese_zordics')->where('id', $request->zordicchinese_id)->update($array);
    
    if ($request->hasFile('chinese_zodiac_icon')) {
        $file = $request->file('chinese_zodiac_icon');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads/chinese_zodiac_icons', $fileName, 'public');
    
        DB::table('chinese_zordics')->where('id', $request->zordicchinese_id)->update([
            'chinese_zodiac_icon' => $fileName,
        ]);
    }
    
    
    DB::commit();
    
    return redirect()->route('chinese-zordic')->withSuccess('Chinese zodiac update successfully');
    } catch (\Exception $e) {
    DB::rollback();
    return back()->withErrors($e->getMessage())->withInput($request->all());
    }
    
    }
    
    
    }
