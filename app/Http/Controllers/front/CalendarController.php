<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Traits\Common;
use DB;
use App\Models\Calendar;
use App\Models\Month; 
use Carbon\Carbon;

class CalendarController extends Controller
{
    use Common;
    public function index($month)
    {
        
        
        $data = $this->headerData(); // Call trait method

        // Convert the input to lowercase and uppercase
        $lowercaseMonth = strtolower($month);
        $uppercaseMonth = strtoupper($month);

        $calendar = Calendar::where('month', $lowercaseMonth)
            ->orWhere('month', $uppercaseMonth)
            ->with('months') // Eager load the 'months' relationship
            ->first();
            
        if (!$calendar) {
            return redirect('/');
        }
            
            
         // Retrieve current month
        $currentMonth = Carbon::createFromFormat('!F', $lowercaseMonth)->month;

        // Retrieve previous and next months
        $previousMonth = Carbon::createFromDate(null, $currentMonth, 1)->subMonth()->format('F');
        $nextMonth = Carbon::createFromDate(null, $currentMonth, 1)->addMonth()->format('F');
            
        // editors
        $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryeditor->id;
        
        $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();
            
        // footer
        $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();
        
        $horoscopecate_id = $horoscopecategoryfooter->id;
        
        $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();

        return view('Front/pages/calendar/astrology-calendar', compact('data', 'calendar','footer_articles','editor_picks_articles','previousMonth','nextMonth'));
        
    }

    
    
}
