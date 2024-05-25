<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ZodicController;
use App\Http\Controllers\admin\HoroscopeController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\CompatibilityController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\HoroscopeCategoryController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ArticleCategoryController;
use App\Http\Controllers\admin\CompatibilityCategoryController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SitemapController;
use App\Http\Controllers\admin\ContributorController;
use App\Http\Controllers\admin\LeadsController;
use App\Http\Controllers\admin\CartsusersController;
use App\Http\Controllers\admin\ZordicCompatibilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\front\ShopController;
use App\Http\Controllers\admin\QuizController;
use App\Http\Controllers\admin\DreamController;
use App\Http\Controllers\admin\DivinationController;
use App\Http\Controllers\admin\CrystalsController;
use App\Http\Controllers\admin\ZordicsignController as zordicsignController;
use App\Http\Controllers\admin\ZordicChineseController;
use App\Http\Controllers\admin\MoneyController;
use App\Http\Controllers\admin\PlanetController;
use App\Http\Controllers\admin\TarotController;
use App\Http\Controllers\admin\Card3tarotController;
use App\Http\Controllers\admin\Card3tarotloveController;
use App\Http\Controllers\admin\Free3cardController;
use App\Http\Controllers\admin\DailytarotController;
use App\Http\Controllers\admin\CalendarController;
use App\Http\Controllers\admin\YesNoTarrotController;

// new by dev
use App\Http\Controllers\admin\Zordic\ZordicArticleController;
use App\Http\Controllers\front\ZordicSignController as FrontZordicSignController;
use App\Http\Controllers\front\ChineseZodiacController as FrontChineseZodiacController;
use App\Http\Controllers\front\PlanetController as FrontPlanetController;
use App\Http\Controllers\front\CalendarController as FrontCalendarController;
use App\Http\Controllers\front\TarotController as FrontTarotController;
use App\Http\Controllers\PersonalizedHoroscopeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('clear', function() {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        return "Cleared!";
    });

Route::controller(loginController::class)->group(function() {

    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

//Route::get('index', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/horoscope/{name}/view',[HomeController::class,'detailHoroscope'])->name('horescope');
Route::get('dream-interpretation/', [HomeController::class, 'dreamshow'])->name('dreamshow');
Route::get('methods-of-divination/', [HomeController::class, 'diviation'])->name('diviation');

// -------------------New Front Route By Dev-------------------

  Route::get('zordic-sign/{slug}', [FrontZordicSignController::class, 'zordicSign'])->name('zordic-sign');

  Route::get('zordic-sign/{slug}/{gender}', [FrontZordicSignController::class, 'zordicSignGender'])->name('zordic-sign-gender');

   Route::get('chinese-zodiac/{slug}', [FrontChineseZodiacController::class, 'chineseZodiac'])->name('chinese-zodiac');

   Route::get('astrology-calendar/{month}',[FrontCalendarController::class,'index']);

   Route::get('planets/',[FrontPlanetController::class,'index']);

   Route::get('planet-details/{id}',[FrontPlanetController::class,'planetDetails']);


    Route::get('tarot/defination',[FrontTarotController::class,'Defination']);
    Route::get('tarot/daily-tarot-reading',[FrontTarotController::class,'dailyTarotReading']);


   // -------------------End New Front Route By Dev-------------------




Route::get('dream-interpretation/dream-dictionary/', [HomeController::class, 'dreamDictionaryShow'])->name('dream-dictionary-show');
Route::get('money-wealth/', [HomeController::class, 'MoneyShow'])->name('money-wealth/');
Route::get('crystal', [HomeController::class, 'crystal'])->name('crystal');

Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/aboutus', [HomeController::class, 'about'])->name('aboutus');
Route::get('/termandandcondition', [HomeController::class, 'termandcondition'])->name('termandandcondition');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', 'App\Http\Controllers\HomeController@faq')->name('faq');
Route::get('/digitalproducts', 'App\Http\Controllers\HomeController@digitalproducts')->name('digitalproducts');
Route::get('/orderspayment', 'App\Http\Controllers\HomeController@orderspayment')->name('orderspayment');
Route::post('/contactSubmit', [HomeController::class, 'contactSubmit'])->name('contactSubmit');
Route::get('/horoscopes/{slug}', [HomeController::class, 'GetHoroscope'])->name('horoscopes');
Route::get('/horoscope/{slug}', [HomeController::class, 'GetHoroscopeCategory'])->name('horoscope');
Route::get('/compability/{slug}', [HomeController::class, 'GetCompabilityCategory'])->name('compability');
Route::get('/horoscope', [PersonalizedHoroscopeController::class, 'showForm'])->name('showHoroscopeForm');
Route::post('/horoscope/submit', [PersonalizedHoroscopeController::class, 'submitForm'])->name('submitHoroscopeForm');
Route::post('/submithomepersonalform', [PersonalizedHoroscopeController::class, 'submitForm'])->name('submithomepersonalform');
Route::get('/Article/{slug?}', [HomeController::class, 'GetArticle'])->name('Article');
Route::get('/Articles/{slug?}', [HomeController::class, 'GetArticleByCategory'])->name('Articles');
Route::get('/UpdatesHoro', [ArticleController::class, 'UpdatesHoro'])->name('UpdatesHoro');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/viewYourCart', [ShopController::class, 'viewYourCart'])->name('viewYourCart')->middleware('auth');
Route::get('/cartempty', [ShopController::class, 'cartempty'])->name('cartempty')->middleware('auth');

Route::post('/addToCart', [ShopController::class, 'addToCart'])->name('addToCart')->middleware('auth');
Route::post('/removeFromCart', [ShopController::class, 'removeFromCart'])->name('removeFromCart');

Route::get('/product-detail/{id}', [ShopController::class, 'productDetail'])->name('product-detail');

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

    Route::get('/login', [AdminController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');

    Route::group(['middleware' => 'adminauth'], function () {

        Route::get('/adminDashboard', function () {return view('welcome');})->name('adminDashboard');

            Route::get('Zordic', [ZodicController::class, 'index'])->name('Zordic');
            Route::get('Zordic/create', [ZodicController::class, 'create'])->name('Zordic.create');
            Route::post('Zordic/store', [ZodicController::class, 'store'])->name('Zordic.store');
            Route::get('Zordic/edit/{id}', [ZodicController::class, 'edit'])->name('Zordic.edit');
            Route::post('Zordic/edit', [ZodicController::class, 'update'])->name('Zordic.edit');
            Route::get('Zordic/destroy/{id}', [ZodicController::class, 'destroy'])->name('Zordic.destroy');
            Route::get('ZordicOrder/{id}/{Order}', [ZodicController::class, 'ChangeOrder'])->name('Zordic.Order');

             Route::get('addquiz', [QuizController::class, 'addquiz'])->name('addquiz');
              Route::post('storequiz', [QuizController::class, 'storequiz'])->name('quiz.store');


              Route::get('addzordicsign', [zordicsignController::class, 'addzordicsign'])->name('addzordicsign');
              Route::post('storezordicsign', [zordicsignController::class, 'storezordicsign'])->name('storezordicsign');
              Route::get('showzordicsign', [zordicsignController::class, 'showzordicsign'])->name('showzordicsign');
              Route::get('editzordicsign/{id}', [zordicsignController::class, 'editzordicsign'])->name('Zordicsign.edit');
             Route::post('updatezordicsign/{id}', [zordicsignController::class, 'updatezordicsign'])->name('Zordicsign.update');
             Route::get('Zordicdestroy/{id}', [zordicsignController::class, 'Zordicdestroy'])->name('ZordicSign.destroy');

             Route::get('addzordicgender', [zordicsignController::class, 'addzordicgender'])->name('addzordicgender');
             Route::post('storezordicgender', [zordicsignController::class, 'storezordicgender'])->name('storezordicgender');
             Route::get('showgender', [zordicsignController::class, 'showgender'])->name('showgender');
             Route::get('editzordicgender/{id}', [zordicsignController::class, 'editZordicGender'])->name('editzordicgender');
             Route::post('updatezordicgender', [zordicsignController::class, 'updateZordicGender'])->name('updatezordicgender');
             Route::get('destroyzordicgender/{id}', [zordicsignController::class, 'destroyZordicGender'])->name('destroyzordicgender');


              Route::get('ShowZordicArticle', [zordicsignController::class, 'ShowZordicArticle'])->name('ShowZordicArticle');
              Route::get('addzordicArticle', [zordicsignController::class, 'addzordicArticle'])->name('addzordicArticle');



            Route::get('Horoscope', [HoroscopeController::class, 'index'])->name('Horoscope');
            Route::get('Horoscope/create', [HoroscopeController::class, 'create'])->name('Horoscope.create');
            Route::post('Horoscope/store', [HoroscopeController::class, 'store'])->name('Horoscope.store');
            Route::get('Horoscope/edit/{id}', [HoroscopeController::class, 'edit'])->name('Horoscope.edit');
            Route::post('Horoscope/edit', [HoroscopeController::class, 'update'])->name('Horoscope.edit');
            Route::get('Horoscope/destroy/{id}', [HoroscopeController::class, 'destroy'])->name('Horoscope.destroy');

            Route::get('Product', [ProductController::class, 'index'])->name('Product');
            Route::get('Product/create', [ProductController::class, 'create'])->name('Product.create');
            Route::post('Product/store', [ProductController::class, 'store'])->name('Product.store');
            Route::get('Product/edit/{id}', [ProductController::class, 'edit'])->name('Product.edit');
            Route::post('Product/edit', [ProductController::class, 'update'])->name('Product.edit');
            Route::get('Product/destroy/{id}', [ProductController::class, 'destroy'])->name('Product.destroy');


            Route::get('Article', [ArticleController::class, 'index'])->name('Article');
            Route::get('Article/create', [ArticleController::class, 'create'])->name('Article.create');
            Route::post('Article/store', [ArticleController::class, 'store'])->name('Article.store');
            Route::get('Article/edit/{id}', [ArticleController::class, 'edit'])->name('Article.edit');
            Route::post('Article/edit', [ArticleController::class, 'update'])->name('Article.edit');
            Route::get('Article/destroy/{id}', [ArticleController::class, 'destroy'])->name('Article.destroy');

            Route::get('contributor', [ContributorController::class, 'index'])->name('contributor');
            Route::get('contributor/create', [ContributorController::class, 'create'])->name('contributor.create');
            Route::post('contributor/store', [ContributorController::class, 'store'])->name('contributor.store');
            Route::get('contributor/edit/{id}', [ContributorController::class, 'edit'])->name('contributor.edit');
            Route::post('contributor/edit', [ContributorController::class, 'update'])->name('contributor.edit');
            Route::get('contributor/destroy/{id}', [ContributorController::class, 'destroy'])->name('contributor.destroy');

            Route::get('tags', [TagsController::class, 'index'])->name('tags');
            Route::get('tags/create', [TagsController::class, 'create'])->name('tags.create');
            Route::post('tags/store', [TagsController::class, 'store'])->name('tags.store');
            Route::get('tags/edit/{id}', [TagsController::class, 'edit'])->name('tags.edit');
            Route::post('tags/edit', [TagsController::class, 'update'])->name('tags.edit');
            Route::get('tags/destroy/{id}', [TagsController::class, 'destroy'])->name('tags.destroy');

            Route::get('HoroscopeCategory', [HoroscopeCategoryController::class, 'index'])->name('HoroscopeCategory');
            Route::get('HoroscopeCategory/create', [HoroscopeCategoryController::class, 'create'])->name('HoroscopeCategory.create');
            Route::post('HoroscopeCategory/store', [HoroscopeCategoryController::class, 'store'])->name('HoroscopeCategory.store');
            Route::get('HoroscopeCategory/edit/{id}', [HoroscopeCategoryController::class, 'edit'])->name('HoroscopeCategory.edit');
            Route::post('HoroscopeCategory/edit', [HoroscopeCategoryController::class, 'update'])->name('HoroscopeCategory.edit');
            Route::get('HoroscopeCategory/destroy/{id}', [HoroscopeCategoryController::class, 'destroy'])->name('HoroscopeCategory.destroy');

            Route::get('ProductCategory', [ProductCategoryController::class, 'index'])->name('ProductCategory');
            Route::get('ProductCategory/create', [ProductCategoryController::class, 'create'])->name('ProductCategory.create');
            Route::post('ProductCategory/store', [ProductCategoryController::class, 'store'])->name('ProductCategory.store');
            Route::get('ProductCategory/edit/{id}', [ProductCategoryController::class, 'edit'])->name('ProductCategory.edit');
            Route::post('ProductCategory/edit', [ProductCategoryController::class, 'update'])->name('ProductCategory.edit');
            Route::get('ProductCategory/destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('ProductCategory.destroy');


            Route::get('ArticleCategory', [ArticleCategoryController::class, 'index'])->name('ArticleCategory');
            Route::get('ArticleCategory/create', [ArticleCategoryController::class, 'create'])->name('ArticleCategory.create');
            Route::post('ArticleCategory/store', [ArticleCategoryController::class, 'store'])->name('ArticleCategory.store');
            Route::get('ArticleCategory/edit/{id}', [ArticleCategoryController::class, 'edit'])->name('ArticleCategory.edit');
            Route::post('ArticleCategory/edit', [ArticleCategoryController::class, 'update'])->name('ArticleCategory.edit');
            Route::get('ArticleCategory/destroy/{id}', [ArticleCategoryController::class, 'destroy'])->name('ArticleCategory.destroy');


            Route::get('settings', [SettingsController::class, 'index'])->name('settings');
            Route::get('AllPages', [SettingsController::class, 'AllPages'])->name('AllPages');
            Route::get('home', [SettingsController::class, 'home'])->name('home');
            Route::get('about', [SettingsController::class, 'about'])->name('about');

            Route::get('dream', [DreamController::class, 'dream'])->name('dream');
            Route::post('storedream', [DreamController::class, 'storedream'])->name('dream.store');

            Route::get('dream-dictionary', [DreamController::class, 'dreamDictionary'])->name('dream-dictionary');
            Route::post('store-dream-dictionary', [DreamController::class, 'storeDreamDictionary'])->name('store.dream-dictionary');

            Route::get('divination', [DivinationController::class, 'divination'])->name('divination');
            Route::post('storedivination', [DivinationController::class, 'storedivination'])->name('divination.store');

            Route::get('crystals', [CrystalsController::class, 'crystals'])->name('crystals');
            Route::post('storecrystals', [CrystalsController::class, 'storecrystals'])->name('crystals.store');

            Route::get('money&wealth', [MoneyController::class, 'moneywealth'])->name('money&wealth');
            Route::post('Money-Wealth', [MoneyController::class, 'update'])->name('money.update');

            Route::get('planets', [PlanetController::class, 'planets'])->name('planets');
             Route::any('planets_update', [PlanetController::class, 'planetsupdate'])->name('planets.update');

             Route::get('tarot', [TarotController::class, 'tarot'])->name('tarot');
             Route::any('tarot_update', [TarotController::class, 'update'])->name('tarot.update');

             Route::get('daily-tarot-reading', [DailytarotController::class, 'edit'])->name('daily-tarot-reading');
            Route::any('daily-tarot_update', [DailytarotController::class, 'update'])->name('daily-tarot-update');

            Route::get('3-card-tarot', [Card3tarotController::class, 'edit'])->name('3-card-tarot');
            Route::any('3-card-tarot-update', [Card3tarotController::class, 'update'])->name('3-card-tarot.update');

            Route::get('3_card_tarot_love_reading', [Card3tarotloveController::class, 'edit'])->name('3_card_tarot_love_reading');
            Route::any('3-card-tarot-love-update', [Card3tarotloveController::class, 'update'])->name('3_card_tarot_love_reading.update');

             Route::get('free-3-card-reading', [Free3cardController::class, 'edit'])->name('free-3-card-reading');
              Route::any('free-3-card-reading-update', [Free3cardController::class, 'update'])->name('free-3-card-reading.update');

               Route::get('yes-no-tarot', [YesNoTarrotController::class, 'edit'])->name('yes-no-tarot');
               Route::post('yes-no-tarot-update', [YesNoTarrotController::class, 'update'])->name('yes-no-tarot-update');





            Route::get('privacypolicy', [SettingsController::class, 'privacy'])->name('privacypolicy');
            Route::get('termandcondition', [SettingsController::class, 'termandcondition'])->name('termandcondition');
            Route::post('home/edit', [SettingsController::class, 'homeUpdate'])->name('home.edit');
            Route::post('AboutPage/edit', [SettingsController::class, 'AboutPageUpdate'])->name('AboutPage.edit');

            Route::post('settings/update', [SettingsController::class, 'update'])->name('settings.update');
            Route::get('integration', [SettingsController::class, 'Integration'])->name('integration');
            Route::post('integration/update', [SettingsController::class, 'updateIntegration'])->name('integration.update');

            Route::get('CreateStatus', [LeadsController::class, 'CreateStatus'])->name('CreateStatus');
            Route::post('StoreStatus', [LeadsController::class, 'StoreStatus'])->name('StoreStatus');
            Route::get('GetStatus', [LeadsController::class, 'GetStatus'])->name('GetStatus');
            Route::get('deleteStatus/{id}', [LeadsController::class, 'destroy'])->name('deleteStatus');
            Route::get('GetLeads', [LeadsController::class, 'GetLeads'])->name('GetLeads');
            Route::get('GetCartUserDetails', [CartsusersController::class, 'GetCartUserDetails'])->name('GetCartUserDetails');

            Route::post('/submit-horoscope', 'PersonalizedHoroscopeController@submitForm')->name('submit.horoscope');

            Route::get('Compatibility', [CompatibilityController::class, 'index'])->name('Compatibility');
            Route::get('Compatibility/create', [CompatibilityController::class, 'create'])->name('Compatibility.create');
            Route::post('Compatibility/store', [CompatibilityController::class, 'store'])->name('Compatibility.store');
            Route::get('Compatibility/edit/{id}', [CompatibilityController::class, 'edit'])->name('Compatibility.edit');
            Route::post('Compatibility/edit', [CompatibilityController::class, 'update'])->name('Compatibility.edit');
            Route::get('Compatibility/destroy/{id}', [CompatibilityController::class, 'destroy'])->name('Compatibility.destroy');

            Route::get('CompatibilityCategory', [CompatibilityCategoryController::class, 'index'])->name('CompatibilityCategory');
            Route::get('CompatibilityCategory/create', [CompatibilityCategoryController::class, 'create'])->name('CompatibilityCategory.create');
            Route::post('CompatibilityCategory/store', [CompatibilityCategoryController::class, 'store'])->name('CompatibilityCategory.store');
            Route::get('CompatibilityCategory/edit/{id}', [CompatibilityCategoryController::class, 'edit'])->name('CompatibilityCategory.edit');
            Route::post('CompatibilityCategory/edit', [CompatibilityCategoryController::class, 'update'])->name('CompatibilityCategory.edit');
            Route::get('CompatibilityCategory/destroy/{id}', [CompatibilityCategoryController::class, 'destroy'])->name('CompatibilityCategory.destroy');

            Route::get('ZordicCompatibility', [ZordicCompatibilityController::class, 'index'])->name('ZordicCompatibility');
            Route::get('ZordicCompatibility/create', [ZordicCompatibilityController::class, 'create'])->name('ZordicCompatibility.create');
            Route::post('ZordicCompatibility/store', [ZordicCompatibilityController::class, 'store'])->name('ZordicCompatibility.store');
            Route::get('ZordicCompatibility/edit/{id}', [ZordicCompatibilityController::class, 'edit'])->name('ZordicCompatibility.edit');
            Route::post('ZordicCompatibility/edit', [ZordicCompatibilityController::class, 'update'])->name('ZordicCompatibility.edit');
            Route::get('ZordicCompatibility/destroy/{id}', [ZordicCompatibilityController::class, 'destroy'])->name('ZordicCompatibility.destroy');


            // -------------------New Admin Route By Dev-------------------

            Route::get('zordic-article', [ZordicArticleController::class, 'index'])->name('zordic-article');
            Route::get('zordic-article-create', [ZordicArticleController::class, 'create'])->name('zordic-article-create');
            Route::post('zordic-article-store', [ZordicArticleController::class, 'store'])->name('zordic-article-store');
            Route::get('zordic-article-edit/{id}', [ZordicArticleController::class, 'edit'])->name('zordic-article-edit');
            Route::post('zordic-article-update', [ZordicArticleController::class, 'update'])->name('zordic-article-update');
            Route::get('zordic-article-destroy/{id}', [ZordicArticleController::class, 'destroy'])->name('zordic-article-destroy');


    });


    Route::get('chinese-zordic', [ZordicChineseController::class, 'index'])->name('chinese-zordic');
    Route::get('zordic-chinese-create', [ZordicChineseController::class, 'create'])->name('zordic-chinese-create');
    Route::post('zordic-chinese-store', [ZordicChineseController::class, 'store'])->name('zordic-chinese-store');
    Route::get('zordic-chinese-edit/{id}', [ZordicChineseController::class, 'edit'])->name('Zordicchinese.edit');
    Route::post('zordic-chinese-update', [ZordicChineseController::class, 'update'])->name('zordic-chinese-update');
     Route::get('zordic-chinese-destroy/{id}', [ZordicChineseController::class, 'destroy'])->name('Zordicchinese.destroy');


     Route::get('planet', [PlanetController::class, 'index'])->name('planet');
     Route::get('create-planet', [PlanetController::class, 'create'])->name('create-planet');
    Route::post('planet-store', [PlanetController::class, 'store'])->name('planet-store');
    Route::get('palnet-edit/{id}', [PlanetController::class, 'edit'])->name('Planet.edit');
    Route::post('planet-update', [PlanetController::class, 'update'])->name('planet-update');
     Route::get('planet-destroy/{id}', [PlanetController::class, 'destroy'])->name('Planet.destroy');

      // -------------------New Admin Calendar Route-------------------

     Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
     Route::get('calendar-create', [CalendarController::class, 'create'])->name('calendar-create');
    Route::post('calendar-store', [CalendarController::class, 'store'])->name('calendar-store');
    Route::get('calendar-edit/{id}', [CalendarController::class, 'edit'])->name('calendar.edit');
    Route::post('/calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar-update');
     Route::get('calendar-destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');



});


Route::get('/sitemap.xml',[SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/sitemap.xml/Horoscope',[SitemapController::class, 'Horoscope'] );