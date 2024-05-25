<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\pages;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Settings::all()->first();
        return view('Admin.pages.sitesettings',compact('data'));   
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       
        try{

            if($request->hasFile('websiteLogo')) 
            {
                $files = $request->file('websiteLogo');
                $img_ext = $files->getClientOriginalExtension();
                $input['websiteLogo'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public', $input['websiteLogo']);
            }
           
            if($request->hasFile('feviconLogo')) 
            {
                $files = $request->file('feviconLogo');
                $img_ext = $files->getClientOriginalExtension();
                $input['feviconLogo'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public', $input['feviconLogo']);
            }
           
            if($request->hasFile('mobileLogo')) 
            {
                $files = $request->file('mobileLogo');
                $img_ext = $files->getClientOriginalExtension();
                $input['mobileLogo'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public', $input['mobileLogo']);
            }
           

              $Settings = Settings::findOrFail(1);
              $Settings->title = $request->title;
              if($request->hasFile('websiteLogo'))
              $Settings->websiteLogo = $input['websiteLogo'];
             
              if($request->hasFile('feviconLogo'))
              $Settings->feviconLogo = $input['feviconLogo'];
             
              if($request->hasFile('mobileLogo'))
              $Settings->mobileLogo = $input['mobileLogo'];
             
              $Settings->facebooklink = $request->facebooklink;
              $Settings->instagram = $request->instagram;
              $Settings->youtube = $request->youtube;
              $Settings->twitter = $request->twitter;
              $Settings->pinterest = $request->pinterest;
              $Settings->tiktok = $request->tiktok;
              $Settings->save();
           //   DB::commit();
              return redirect()->route('settings')->withSuccess('Settings updated successfully');
        }catch (\Exception $e){
            //DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }

    }

    public function Integration(Request $request)
    {
        $data = Settings::all()->first();
        return view('Admin.pages.integration',compact('data')); 
    }
/**
     * Update the specified resource in storage.
     */
    public function updateIntegration(Request $request)
    {  
        try{
              $Settings = Settings::findOrFail(1);
              $Settings->googlesearchconsole = $request->googlesearchconsole;
              $Settings->sitemap = $request->sitemap;
              $Settings->bingsearch = $request->bingsearch;
              $Settings->yandesk = $request->yandesk;
              $Settings->copyright = $request->copyright;
              $Settings->save();
              return redirect()->route('integration')->withSuccess('Integration updated successfully');
        }catch (\Exception $e){
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }
    }

    public function AllPages(Request $request)
    {  
        return view('Admin.pages.allpages');
    }

    public function home()
    {
        $data = pages::where('pagename','home')->first();
        return view('Admin.pages.allpages.home',compact('data'));   
    }

    public function termandcondition()
    {
        $data = pages::where('pagename','termcondition')->first();
        return view('Admin.pages.allpages.termcondition',compact('data'));   
    }

    public function about()
    {
        $data = pages::where('pagename','about')->first();
        return view('Admin.pages.allpages.about',compact('data'));   
    }

    public function privacy()
    {
        $data = pages::where('pagename','privacy')->first();
        return view('Admin.pages.allpages.privacy',compact('data'));   
    }

    public function homeUpdate(Request $request)
    {
             $id=$request->id;
              $pages = pages::findOrFail($id);
              if ($request->h1)
              $pages->h1 = $request->h1;
              if ($request->h2)
              $pages->h2 = $request->h2;
              if ($request->contant)
              $pages->contant = $request->contant;
              $pages->save();   
              return redirect()->route('AllPages')->withSuccess('Home updated successfully');
    }

    public function AboutPageUpdate(Request $request)
    {
        if($request->hasFile('image1')) {
            $files = $request->file('image1');
            $img_ext = $files->getClientOriginalExtension();
            $input['image1'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
            $path = $files->storeAs('public', $input['image1']);
          }
          if($request->hasFile('image2')) {
            $files = $request->file('image2');
            $img_ext = $files->getClientOriginalExtension();
            $input['image2'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
            $path = $files->storeAs('public', $input['image2']);
          }
          if($request->hasFile('image3')) {
            $files = $request->file('image3');
            $img_ext = $files->getClientOriginalExtension();
            $input['image3'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
            $path = $files->storeAs('public', $input['image3']);
          }
              $id=$request->id;
              $pages = pages::findOrFail($id);
              if ($request->h1)
              $pages->h1 = $request->h1;
              if ($request->h2)
              $pages->h2 = $request->h2;
              if ($request->h3)
              $pages->h2 = $request->h3;
              if ($request->h4)
              $pages->h4 = $request->h4;
              if ($request->contant)
              $pages->contant = $request->contant;
              if ($request->contant1)
              $pages->contant = $request->contant1;
              if ($request->contant2)
              $pages->content2 = $request->contant2;
              if ($request->contant3)
              $pages->content3 = $request->contant3;
              if($request->hasFile('image1'))
              $pages->Image = $input['image1'];
              if($request->hasFile('image2'))
              $pages->imag2 = $input['image2'];
              if($request->hasFile('image3'))
              $pages->imag3 = $input['image3'];
              $pages->save();   
              return redirect()->route('AllPages')->withSuccess('Home updated successfully');
    }


}
