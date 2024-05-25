<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ZodicController;
use App\Http\Controllers\admin\HoroscopeController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\HoroscopeCategoryController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SitemapController;
use App\Http\Controllers\admin\ContributorController;


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

Route::get('/', function () {
    return redirect()->route('adminLogin');
});

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('adminDashboard', function () {return view('welcome');})->name('adminDashboard');
            Route::get('Zordic', [ZodicController::class, 'index'])->name('Zordic');
            Route::get('Zordic/create', [ZodicController::class, 'create'])->name('Zordic.create');
            Route::post('Zordic/store', [ZodicController::class, 'store'])->name('Zordic.store');
            Route::get('Zordic/edit/{id}', [ZodicController::class, 'edit'])->name('Zordic.edit');
            Route::post('Zordic/edit', [ZodicController::class, 'update'])->name('Zordic.edit');
            Route::get('Zordic/destroy/{id}', [ZodicController::class, 'destroy'])->name('Zordic.destroy');

            Route::get('Horoscope', [HoroscopeController::class, 'index'])->name('Horoscope');
            Route::get('Horoscope/create', [HoroscopeController::class, 'create'])->name('Horoscope.create');
            Route::post('Horoscope/store', [HoroscopeController::class, 'store'])->name('Horoscope.store');
            Route::get('Horoscope/edit/{id}', [HoroscopeController::class, 'edit'])->name('Horoscope.edit');
            Route::post('Horoscope/edit', [HoroscopeController::class, 'update'])->name('Horoscope.edit');
            Route::get('Horoscope/destroy/{id}', [HoroscopeController::class, 'destroy'])->name('Horoscope.destroy');

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

            Route::get('settings', [SettingsController::class, 'index'])->name('settings');
            Route::get('AllPages', [SettingsController::class, 'AllPages'])->name('AllPages');
            Route::get('home', [SettingsController::class, 'home'])->name('home');
            Route::get('about', [SettingsController::class, 'about'])->name('about');
            Route::get('privacypolicy', [SettingsController::class, 'privacy'])->name('privacypolicy');
            Route::get('termandcondition', [SettingsController::class, 'termandcondition'])->name('termandcondition');
            Route::post('home/edit', [SettingsController::class, 'homeUpdate'])->name('home.edit');


            Route::post('settings/update', [SettingsController::class, 'update'])->name('settings.update');
            Route::get('integration', [SettingsController::class, 'Integration'])->name('integration');
            Route::post('integration/update', [SettingsController::class, 'updateIntegration'])->name('integration.update');
            
    });

           
});

Route::get('/sitemap.xml',[SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/sitemap.xml/Horoscope',[SitemapController::class, 'Horoscope'] );
