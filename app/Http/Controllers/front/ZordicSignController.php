<?php

namespace App\Http\Controllers\front;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Lead;
use App\Traits\Common;
use DB;
use Illuminate\Support\Facades\Auth;

class ZordicSignController extends Controller
{
    use Common;

    public function zordicSign($sign) {
    $zordicdata = DB::table('zordic')->where('slug', 'like', '%' . $sign )->first();
    
    if($zordicdata){
    $zordic_id = $zordicdata->id;
    
    $zordicsigndata = DB::table('zordic_sign')->where('zordic_id',$zordic_id)->first();
    
    if($zordicsigndata){
    
    $data = $this->headerData();
    
    // editors
    $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryeditor->id;
    
    $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
    
    // footer
    $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryfooter->id;
    
    $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
    
    return view('Front/pages/zordic_sign/zodiac-signs',compact('data','zordicsigndata','editor_picks_articles','footer_articles'));
        
    }else{
    dd('No data found for this sign');
    }
    
    }else{
    dd('Invalid zordic sign.');   
    }
       
    }
    
    
    public function zordicSignGender($sign,$gender) {
    $zordicdata = DB::table('zordic')->where('slug', 'like', '%' . $sign )->first();
    
    if($zordicdata){
    $zordic_id = $zordicdata->id;
    
    $zordicsigndata = DB::table('zordic_sign')->where('zordic_id',$zordic_id)->first();
    
    if($zordicsigndata){
        
    $zordicgender = DB::table('zordic_gender')->whereRaw('LOWER(gender) = ?', [strtolower($gender)])->first();
    
    if($zordicgender){
    $zordic_sign_id = $zordicsigndata->id;
    $zordic_gender_id = $zordicgender->id;
    
    $zordicarticle = DB::table('zordic_articles')->where('zordicsign_id', $zordic_sign_id )->where('zordic_gender', $zordic_gender_id )->first();
    
    if($zordicarticle){
    $data = $this->headerData();
    
    // editors
    $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryeditor->id;
    
    $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
    
    // footer
    $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryfooter->id;
    
    $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
    
    return view('Front/pages/zordic_sign/zodiac-signs-gender-article',compact('data','zordicarticle','editor_picks_articles','footer_articles'));    
    }else{
     dd('No data found for this gender on this sign');
    }
    
        
    }else{
    dd('Invalid gender');
    }
    
        
    }else{
    dd('No data found for this sign');
    }
    
    }else{
    dd('Invalid zordic sign.');   
    }
       
    }


}
