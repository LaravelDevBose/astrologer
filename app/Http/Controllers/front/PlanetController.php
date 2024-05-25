<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Traits\Common;
use DB;

class PlanetController extends Controller
{
    use Common;
    public function index()
    {

        $data = $this->headerData(); // Call trait method
        $planetsData = DB::table('backend_planets')->first();
        $planetsNameData = DB::table('planets')->get();
        
        // editors
        $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryeditor->id;
        
        $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        // footer
        $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryfooter->id;
        
        $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        return view('Front/pages/planets/planet',compact('data','planetsData','planetsNameData','editor_picks_articles','footer_articles'));
    }
    
    
        public function planetDetails($id)
    {

        $data = $this->headerData(); // Call trait method
        $planetsData = DB::table('planets')->where('id',$id)->first();
        
        if($planetsData){
            
        // editors
        $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryeditor->id;
        
        $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
        
        // footer
        $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryfooter->id;
        
        $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
            
        return view('Front/pages/planets/planet_details',compact('data','planetsData','editor_picks_articles','footer_articles'));
            
        }else{
             return redirect('/');
        }
        
    }
    
}
