<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Calendar;
use App\Models\Month; 
class CalendarController extends Controller
{
    
    public function index()
    {
    $data=DB::table('calendars')->get();
    return view('Admin/pages/calendars/list',compact('data'));
    }
    
    
    public function create()
    {
    $calendarCategory = DB::table('chinese_zordics_categories')->get();
    return view('Admin/pages/calendars/create',compact('calendarCategory'));
    }
    // Your existing code...
    
    public function store(Request $request)
    {
    $calendar = new Calendar();
    $calendar->month = $request->input('month');
    $calendar->content = $request->input('content');
    
    $calendar->favorable_major_transit = $request->has('favorable_major_transit');
    $calendar->new_zodiac_season = $request->has('new_zodiac_season');
    $calendar->retrograde = $request->has('retrograde');
    $calendar->moon_events = $request->has('moon_events');
    $calendar->save();
    
    // Save the related months
    foreach ($request->input('monthcontent', []) as $key => $monthcontent) {
    $calendar->months()->create([
    'month_content' => $request->input('monthcontent.' . $key),
    ]);
    }
    
    return redirect()->route('calendar')->with('success', 'Calendar entry added successfully');
    }
    
    
    public function destroy(string $id)
    {
    $calendar = Calendar::findOrFail($id);
    
    // Delete related months first
    $calendar->months()->delete();
    
    // Then delete the calendar
    $calendar->delete();
    
    // Redirect back with success message
    return redirect()->back()->with('success', 'Calendar deleted successfully');
    }
    
    
    public function edit(string $id)
    {
    $calendar = Calendar::with('months')->find($id);
    return view('Admin/pages/calendars/edit', compact('calendar'));
    }
    
    public function update(Request $request, $id)
    {
    $calendar = Calendar::find($id);
    
    if (!$calendar) {
    return redirect()->back()->with('error', 'Calendar not found');
    }
    
    // Update calendar fields
    $calendar->month = $request->input('month'); // Assuming 'month' is the field name in your 'calendars' table
    $calendar->content = $request->input('content');
    $calendar->favorable_major_transit = $request->has('favorable_major_transit');
    $calendar->new_zodiac_season = $request->has('new_zodiac_season');
    $calendar->retrograde = $request->has('retrograde');
    $calendar->moon_events = $request->has('moon_events');
    
    $calendar->save();
    
    Month::where('calendar_id',$id)->delete();
    
    // Update or create months
    foreach ($request->input('monthcontent', []) as $key => $monthcontent) {
    $calendar->months()->create([
    'month_content' => $request->input('monthcontent.' . $key),
    ]);
    }
    
    return redirect('calendar')->with('success', 'Calendar updated successfully');
    }
    
    }
