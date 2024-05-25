<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::orderBy('id', 'DESC')->get();
        return view('Admin.pages.product.product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productcategory = DB::table('productcategory')->get();
        return view('Admin.pages.product.createproduct',compact('productcategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'regulareprice' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'color' => 'required',
            'description' => 'required',
            'shortdecription' => 'required',
            'category_id' => 'required',
            'thumbImage'  =>'required|max:20480'
        ]);

        try{

            $data = DB::table('productcategory')->where('title',$request->title)->first();
            if ($data) {
                return back()->withErrors("This Product Category already exits")->withInput($request->all());
            }

            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/product', $input['thumbImage']);
              }
              DB::enableQueryLog();

              $ProductCategory = Product::make();
              $ProductCategory->title = $request->title;
              $ProductCategory->price = $request->price;
              $ProductCategory->regulareprice = $request->regulareprice;
              $ProductCategory->stock = $request->stock;
              $ProductCategory->size = $request->size;
              $ProductCategory->color = $request->color;
              $ProductCategory->description = $request->description;
              $ProductCategory->shortdecription = $request->shortdecription;
              $ProductCategory->category_id = $request->category_id;
              if($request->hasFile('thumbImage'))
              $ProductCategory->thumbImages = $input['thumbImage'];
              $ProductCategory->save();
             
              DB::commit();
              return redirect()->route('Product')->withSuccess('Product Category created successfully');

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
        $data = Product::findOrFail($id);
        $productcategory = DB::table('productcategory')->get();
        return view('Admin.pages.product.edit-product',compact('data','productcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'regulareprice' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'color' => 'required',
            'description' => 'required',
            'shortdecription' => 'required',
            'category_id' => 'required'
        ]);

        try{
            $id=$request->id;
            DB::beginTransaction();
            if($request->hasFile('thumbImage')) {
                $files = $request->file('thumbImage');
                $img_ext = $files->getClientOriginalExtension();
                $input['thumbImage'] = 'Image-'.rand(999999,0000000). '.' . $img_ext;
                $path = $files->storeAs('public/product', $input['thumbImage']);
              }
           // $input['Image']='';


              $ProductCategory = Product::findOrFail($id);
              $ProductCategory->title = $request->title;
              $ProductCategory->price = $request->price;
              $ProductCategory->regulareprice = $request->regulareprice;
              $ProductCategory->stock = $request->stock;
              $ProductCategory->size = $request->size;
              $ProductCategory->color = $request->color;
              $ProductCategory->description = $request->description;
              $ProductCategory->shortdecription = $request->shortdecription;
              $ProductCategory->category_id = $request->category_id;
              if($request->hasFile('thumbImage'))
              $ProductCategory->thumbImages = $input['thumbImage'];
              $ProductCategory->save();
              DB::commit();
              return redirect()->route('Product')->withSuccess('Product Category updated successfully');
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
        $data = Product::findOrFail($id);
        $data->delete();
        return back()->withSuccess('Product Category deleted successfully');
    }
}
