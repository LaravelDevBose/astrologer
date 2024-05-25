<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use DB;
class ProductCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProductCategory::orderBy('id', 'DESC')->get();
        return view('Admin.pages.productcategory.productcategory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horoscopeCategory = DB::table('productcategory')->get();
        return view('Admin.pages.productcategory.createproductcategory',compact('horoscopeCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'thumbImage'  =>'required|max:20480'
        ]);

        try{
            DB::beginTransaction();

            $data = DB::table('productcategory')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Product Category already exits")->withInput($request->all());
            }

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/productcategory', $input['thumbImage']);
              }

              $ProductCategory = ProductCategory::make();
              $ProductCategory->title = $request->title;
              if($request->hasFile('thumbImage'))
              $ProductCategory->thumbImage = $input['thumbImage'];
              $ProductCategory->save();
              DB::commit();
              return redirect()->route('ProductCategory')->withSuccess('Product Category created successfully');

        }catch (\Exception $e){
            DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ProductCategory::findOrFail($id);
        return view('Admin.pages.productcategory.edit-productcategory',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            //'horoscopeDate' => 'required',
            'title' => 'required',
           // 'contant' => 'required',
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();

           // $input['Image']='';


              $HoroscopeCategory = ProductCategory::findOrFail($id);
              $HoroscopeCategory->title = $request->title;
             // $HoroscopeCategory->contant = $request->contant;
             // $HoroscopeCategory->horoscopeDate = $request->horoscopeDate;

              $HoroscopeCategory->save();
              DB::commit();
              return redirect()->route('ProductCategory')->withSuccess('Product Category updated successfully');
        }catch (\Exception $e){
            DB::rollback();
            return back()->withErrors($e->getMessage())->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ProductCategory::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Product Category deleted successfully');
    }
}
