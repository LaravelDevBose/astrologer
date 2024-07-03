<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\AstrologyApiClient;
use App\Models\DivineAPI;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Traits\Common; // Trait
use DB;
use App\Models\HoroscopeCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    use Common;

    public function index()
    {
        $data = array();
        $data = $this->headerData(); // Call trait method
        $data['pages'] = DB::table('pages')->where('pagename', 'home')->first();
        return view('Front.pages.home', compact('data'));
    }
    public function horoscope()
    {
        $data = array();
        $data = $this->headerData(); // Call trait method
        $data['pages'] = DB::table('pages')->where('pagename', 'home')->first();
        $data['artcle'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
        ,'title'
        ,'createdBy','created_at','excerpt')->where('type', 2)->where('horoscopecate_id', 15)
        ->offset(0)->limit(6)->orderBy('id', 'desc')->get();
        $data['tarot'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
        ,'title'
        ,'createdBy','created_at','excerpt')->where('type', 2)->where('horoscopecate_id', 16)->offset(0)->limit(4)->orderBy('id', 'desc')->get();
        $data['love'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
        FROM horoscopecategory
        WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
        ,'title'
        ,'createdBy','created_at','excerpt')->where('type', 2)->where('horoscopecate_id', 17)->offset(0)->limit(4)->orderBy('id', 'desc')->get();

        $zodics = config('global.zodics');
        // dd($data);
        return view('Front.pages.horoscope-list', compact('data','zodics'));
    }

    public function horoscope_reading()
    {
        $zodics = config('global.zodics');
        $data = array();
        $data = $this->headerData(); // Call trait method
        $data['pages'] = DB::table('pages')->where('pagename', 'home')->first();
        return view('Front.pages.horoscope_reading', compact('zodics', 'data'));
    }

    public function termandcondition()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    $data['pages'] = DB::table('pages')->where('pagename', 'home')->first();
    return view('Front.pages.termcondition', compact('data'));
    }

    public function faq()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    // You can add any additional data fetching or processing logic here if needed
    return view('Front.pages.faq', compact('data'));
    }

    public function digitalproducts()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    // You can add any additional data fetching or processing logic here if needed
    return view('Front.pages.digitalproducts', compact('data'));
    }

    public function orderspayment()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    // You can add any additional data fetching or processing logic here if needed
    return view('Front.pages.orderspayment', compact('data'));
    }


    public function privacy()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    $data['pages'] = DB::table('pages')->where('pagename', 'privacy')->first();
    return view('Front.pages.privacy', compact('data'));
    }

    public function about()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    $data['pages'] = DB::table('pages')->where('pagename', 'about')->first();
    $data['contributor'] = DB::table('contributor')->get();
    return view('Front.pages.about', compact('data'));
    }

    public function contact()
    {
    $data = array();
    $data = $this->headerData(); // Call trait method
    $data['pages'] = DB::table('pages')->where('pagename', 'contact')->first();
    return view('Front.pages.contact', compact('data'));
    }
    public function contactSubmit(Request $request)
    {

        $validatedData = $request->validate([
        'email' => 'required|email',
        'subject' => 'required',
        'description' => 'required',
        // 'orderno' => 'required',
        // 'attachment'  =>'required|max:20480'
        ]);

        try {
        $input['attachment'] = '';

        if ($request->hasFile('attachment')) {
        $files = $request->file('attachment');
        $img_ext = $files->getClientOriginalExtension();
        $input['attachment'] = 'Image-' . rand(999999, 0000000) . '.' . $img_ext;
        $path = $files->storeAs('public/leads', $input['attachment']);
        }
        // dd($files);
        DB::table('contact')->insert([
        'email' => $request->email, 'subject' => $request->subject, 'description' => $request->description, 'attachment' => $input['attachment']
        ]);
        
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactForm([
        'email' => $request->email,
        'subject' => $request->subject,
        'description' => $request->description,
        // 'attachment' => $input['attachment']
        ]));
        
        return redirect()->route('contact')->withSuccess('Lead created successfully');
        } catch (\Exception $e) {
        DB::rollback();
        return back()->withErrors($e->getMessage())->withInput($request->all());
        }
    }

    public function GetHoroscope($slug)
    {
    $horoscope = explode('-', $slug);
    $data = $this->headerData(); // Call trait method
    if (!empty($horoscope)) {
    $ZodiacSlug = $horoscope[0];
    $HoroscopecategorySlug = $horoscope[1];
    $Zodiac = DB::table('zordic')->where('slug', $horoscope[0])->first();
    $Horoscopecategory = DB::table('horoscopecategory')->where('slug', $horoscope[1])->first();
    if ($Zodiac && $Horoscopecategory) {
    $data['Horoscope']['yesterday'] = DB::table('horoscope')
    ->where('horoscopecate_id', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW()) - INTERVAL 1 DAY')
    ->first();
    $data['Horoscope']['today'] = DB::table('horoscope')
    ->where('horoscopecate_id', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW())')
    ->first();
    $data['Horoscope']['tomorrow'] = DB::table('horoscope')
    ->where('horoscopecate_id', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW()) + INTERVAL 1 DAY')
    ->first();


    $data['Horoscoperecommended']['yesterday'] = DB::table('horoscope')
    ->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as title'), DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as cateslug'), 'contant')
    ->where('horoscopecate_id', '!=', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW()) - INTERVAL -1 DAY')
    ->get();
    $data['Horoscoperecommended']['today'] = DB::table('horoscope')
    ->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as title'), DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as cateslug'), 'contant','excerpt')
    ->where('horoscopecate_id', '!=', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW())')
    ->get();
    $data['Horoscoperecommended']['tomorrow'] = DB::table('horoscope')
    ->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as title'), DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as cateslug'), 'contant')
    ->where('horoscopecate_id', '!=', $Horoscopecategory->id)
    ->where('Zordic_id', $Zodiac->id)
    ->whereRaw('DATE(horoscopeDate) = DATE(NOW()) + INTERVAL 1 DAY')
    ->get();
    $data['Horoscoperecommended']['zodiacslug'] = $horoscope[0];
    return view('Front.pages.horoscope', compact('data'));
    }
    }
    }

    public function GetHoroscopeCategory($slug)
    {
    $data = $this->headerData(); // Call trait method

    return view('Front.pages.horoscopecategory', compact('data'));
    }
    public function GetCompabilityCategory($slug)
    {
    $data = $this->headerData(); // Call trait method
    $data2 = DB::table('horoscopecategory')->where('slug', $slug)->first();

    if ($data2) {
    $data['content'] = DB::table('horoscope')
    ->select('horoscope.*') // Select all columns from the horoscope table
    ->join('horoscopecategory', 'horoscopecategory.category_type', '=', 'horoscope.type')
    ->where('horoscope.type', 3)
    ->where('horoscope.horoscopecate_id', $data2->id) // Assuming horoscopecate_id is the correct column
    ->where('horoscopecategory.slug', $slug)
    ->get();
    } else {
    // Handle the case where no matching record is found in horoscopecategory for the given slug
    $data['content'] = []; // Or any appropriate action like setting an empty array
    }

    return view('Front.pages.compabilitycategory', compact('data', 'data2'));
    }

    public function GetArticle($slug = '')
    {
    $data = $this->headerData(); // Call trait method

    if ($slug == '') {
    $data['article'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
    ,'title'
    ,'createdBy','created_at','excerpt')->get();

    return view('Front.pages.Article', compact('data'));
    } else {
    $data['article'] = DB::table('horoscope')
    ->where('slug', $slug)->first();

    if(!empty($data['article'])){
    $data['previousearticle'] = DB::table('horoscope')->where('type', 2)
    ->where('horoscopecate_id', $data['article']->horoscopecate_id)
    ->whereNotIn('id', [$data['article']->id])->get();

    // editors
    $horoscopecategoryeditor = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Editors-Picks-Articles' )->first();

    $horoscopecate_id = $horoscopecategoryeditor->id;

    $editor_picks_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();

    // footer
    $horoscopecategoryfooter = DB::table('horoscopecategory')->where('slug', 'like' , '%' . 'Footer-Articles' )->first();

    $horoscopecate_id = $horoscopecategoryfooter->id;

    $footer_articles = DB::table('horoscope')->where('horoscopecate_id', $horoscopecate_id)->get();

    return view('Front.pages.readArticle', compact('data','editor_picks_articles','footer_articles'));
    }else{
     return redirect('/');
    }

    }

    }

    public function GetArticleByCategory($slug= '')
    {

    if($slug == 'All'){

    $data = $this->headerData(); // Call trait method
    $data['article'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
    ,'title'
    ,'createdBy','created_at','excerpt')->get();
    return view('Front.pages.article', compact('data'));


    }else{
    $horoscopeCategory = HoroscopeCategory::where('slug',$slug)->first();

    if(empty($horoscopeCategory)){
    return redirect('/');
    }else{

    $data = $this->headerData(); // Call trait method
    $data['article'] = DB::table('horoscope')->select(DB::raw('(SELECT horoscopecategory.title
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categorytitle'),DB::raw('(SELECT horoscopecategory.slug
    FROM horoscopecategory
    WHERE horoscopecategory.id = horoscopecate_id limit 1) as categoryslug'),'thumbImage','slug'
    ,'title'
    ,'createdBy','created_at','excerpt')->where('horoscopecate_id',$horoscopeCategory->id)->get();
    return view('Front.pages.article', compact('data'));
    }

    }

    }

    public function dreamshow()
    {
    $data = $this->headerData();

    $pagedata = DB::table('pages')->select('h1', 'top_image', 'banner_title', 'contant', 'banner2_image', 'content2')->where('pagename','dream')->first();
    return view('Front.pages.Dream', compact('data','pagedata'));

    }

    public function dreamDictionaryShow()
    {
    $data = $this->headerData();

    $pagedata = DB::table('pages')->select('h1', 'h2', 'button_text', 'contant', 'button_url', 'content2')->where('pagename','dream-dictionary')->first();
    return view('Front.pages.dream_dictionary', compact('data','pagedata'));

    }
    public function diviation()
    {
    $data = $this->headerData(); // Call trait method
    $dataa=DB::table('pages')->where('role','divination')->first();
    // dd($data);

    // $data = DB::table('pages')->select('h1', 'top_image', 'banner_title', 'contant', 'banner2_image', 'content2')->get();

    // $pagedata = DB::table('pages')->select('h1', 'top_image', 'banner_title', 'contant', 'banner2_image', 'content2')->where('pagename','dream')->where('role','divination')->first();
    // dd($pagedata);
    return view('Front.pages.diviation', compact('dataa','data'));
    }
    public function crystal()
    {

    $data = $this->headerData(); // Call trait method
    $dataa=DB::table('pages')->where('role','crystal')->first();
    // dd($dataa);

    // $data = DB::table('pages')->select('h1', 'top_image', 'banner_title', 'contant', 'banner2_image', 'content2')->get();

    // $pagedata = DB::table('pages')->select('h1', 'top_image', 'banner_title', 'contant', 'banner2_image', 'content2')->where('pagename','dream')->where('role','divination')->first();
    // dd($pagedata);
    return view('Front.pages.crystal', compact('dataa','data'));
    }
    public function MoneyShow()
    {
        $pagedata=DB::table('pages')->where('role','money')->first();

        return view('Front.pages.Money', compact('pagedata'));
    }

    public function detailHoroscope(Request $req,$name) {
        // echo phpinfo();
        // dd($name);
        $pridicatinday = ['today','yesterday','tomorrow'];
        if(in_array($req->get('action'),$pridicatinday)) {
            $day = $req->get('action') ?: 'today';
        } else {
            $day = 'today';
        }
        $sitesettings  = DB::table('settings')->first();
        $data = array();

        $zodics =config('global.zodics');

        $userId = config('astrologer.user_id');
        $apiKey = config('astrologer.api_key');
        $timezone = config('astrologer.timezone');
        $currentdate = Carbon::now()->tz('Asia/Kolkata')->format('Y-m-d');
        $tomorrowdate = Carbon::now()->tz('Asia/Kolkata')->addDay()->format('Y-m-d');
        $yesterdaydate = Carbon::now()->tz('Asia/Kolkata')->subDays(1)->format('Y-m-d');

        // $data = array(
        //     'timezone' => 5.5
        // );

        // // instantiate AstrologyApiClient class
        // $astrologyApi = new AstrologyApiClient($userId, $apiKey);

        // $todaysPrediction = $astrologyApi->getTodaysPrediction(strtolower($name), $data['timezone']);
        // $tomorrowsPrediction = $astrologyApi->getTomorrowsPrediction(strtolower($name), $data['timezone']);
        // $yesterdaysPrediction = $astrologyApi->getYesterdaysPrediction(strtolower($name), $data['timezone']);

        $data = [
            'api_key' => $apiKey,
            'date' => $currentdate,
            'sign' => strtoupper($name),
            'timezone' =>$timezone
        ];
        $tomorrowsPrediction = $yesterdaysPrediction = $todaysPrediction = [];

        $divineAPI = new DivineAPI($apiKey);
        if($day == 'today') {
            $todaysPrediction = $divineAPI->getTodaysPrediction($data);
        } else if($day == 'tomorrow') {
            $data['date'] = $tomorrowdate;
            $tomorrowsPrediction = $divineAPI->getTodaysPrediction($data);
        } else if($day == 'yesterday') {
            $data['date'] = $yesterdaydate;
            $yesterdaysPrediction = $divineAPI->getTodaysPrediction($data);
        }

        $data['Horoscope'] = [
            'today' => $todaysPrediction,
            'tomorrow' => $tomorrowsPrediction,
            'yesterday' => $yesterdaysPrediction,
        ];

        if($day == 'today') {
            $data['Horoscope']['today']->prediction_date = $currentdate;
        } else if($day == 'tomorrow') {
            $data['Horoscope']['tomorrow']->prediction_date =  $tomorrowdate;
        } else if($day == 'yesterday') {
            $data['Horoscope']['yesterday']->prediction_date =  $yesterdaydate;
        }

        // echo '<pre>'; print_r($data); exit;
        $data['header'] = json_decode(
            json_encode(
                [
                    'facebooklink' => 'www.google.com',
                    'instagram' => 'www.google.com',
                    'instagram' => 'www.google.com',
                    'youtube' => 'www.google.com',
                    'websiteLogo' => $sitesettings->websiteLogo,
                    'title' => $sitesettings->title,
                    'mobileLogo' => $sitesettings->mobileLogo,
                    'facebooklink' => $sitesettings->facebooklink,
                    'instagram' => $sitesettings->instagram,
                    'youtube' => $sitesettings->youtube,
                    'twitter' => $sitesettings->twitter,
                    'pinterest' => $sitesettings->pinterest,
                    'feviconLogo' => $sitesettings->feviconLogo,
                ]
            )
        );
        $data['zodic_info'] =  [
            'zodic_name' => ucfirst($name),
            'image' => "assets/images/".$zodics[strtolower($name)]['images'],
        ];
        // echo '<pre>'; print_r($data); exit   ;
        return view('Front.pages.horescope_detail',compact('data','day'));
    }

    public function TarotYesOrNo() {

    }

}
