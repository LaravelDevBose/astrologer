<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Horoscope;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
      $Horoscope = Horoscope::all()->first();

      return response()->view('admin.pages.sitemap.index', [
          'Horoscope' => $Horoscope
      ])->header('Content-Type', 'text/xml');
    }

    public function Horoscope()
    {
        $Horoscope = Horoscope::latest()->get();
        return response()->view('admin.pages.sitemap.horoscope', [
            'Horoscope' => $Horoscope,
        ])->header('Content-Type', 'text/xml');
    }


}
