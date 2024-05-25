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

class ChineseZodiacController extends Controller
{
    use Common;

    public function chineseZodiac($sign) {
    $chinese_category_data = DB::table('chinese_zordics_categories')->where('slug', 'like', '%' . $sign )->first();
    
    if($chinese_category_data){
    $chinise_zordic_category_id = $chinese_category_data->id;
    
    $chinese_zordics_data = DB::table('chinese_zordics')->where('chinise_zordic_category_id',$chinise_zordic_category_id)->first();
    
    if($chinese_zordics_data){
    
    $data = $this->headerData();
    
    // editors
    $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryeditor->id;
    
    $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
    
    // footer
    $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
    
    $horoscopecate_id = $horoscopecategoryfooter->id;
    
    $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
     
    return view('Front/pages/chinese_zodiac/chinese-zodiacs',compact('data','chinese_zordics_data','editor_picks_articles','footer_articles'));
        
    }else{
    dd('No data found for this sign');
    }
    
    }else{
    dd('Invalid chinese zordic sign.');   
    }
       
    }
    

}
