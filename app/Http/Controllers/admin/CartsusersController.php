<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CartsusersController extends Controller
{

    public function GetCartUserDetails()
    {
       $data = DB::table('product as P')
                ->select('P.*', 'UC.*', 'PC.title as cat_title')
                ->join('user_cart as UC', 'UC.product_id', '=', 'P.id')
                ->join('productcategory as PC', 'PC.id', '=', 'P.category_id')
                ->get();

        return view('admin.pages.Carts.list',compact('data'));
    }

   
}
