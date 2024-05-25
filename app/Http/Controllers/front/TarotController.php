<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Traits\Common;
use DB;

class TarotController extends Controller
{
    use Common;
    
    public function Defination()
    {

        $data = $this->headerData(); // Call trait method
        $definationData = DB::table('tarots')->first();
        
        // editors
        $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryeditor->id;
        
        $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        // footer
        $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryfooter->id;
        
        $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        return view('Front/pages/tarot/defination',compact('data','definationData','editor_picks_articles','footer_articles'));
    }
    
    
      public function dailyTarotReading()
    {

        $data = $this->headerData(); // Call trait method
        $dailyData = DB::table('daily_tarots')->first();
        
        // editors
        $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryeditor->id;
        
        $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        // footer
        $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryfooter->id;
        
        $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        return view('Front/pages/tarot/daily-tarot-reading',compact('data','dailyData','editor_picks_articles','footer_articles'));
    }
    
    
    
}
