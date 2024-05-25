<?php

namespace App\Http\Controllers\front;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Lead;
use App\Traits\Common;
use DB;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    use Common;
    public function __construct()
    {
        $this->middleware('auth')->only(['addToCart', 'cartempty']);
    }

    public function shop() {
        try {
            $data = $this->headerData();
            $data['productCategories'] = ProductCategory::get();
            $data['products'] = Product::get();
            return view('Front.pages.shop',compact('data'));
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function productDetail($id) {
        try {
            $data = $this->headerData();
            $product = Product::find($id);
            $products = Product::whereNotIn('id',[$id])->get();
            return view('Front.pages.product-detail',compact('data','product','products'));
        } catch (Exception $e) {
            Log::error($e);
        }
    }
    public function addToCart(Request $request) {
        try {
            $userId = Auth::user()->id;
            $productId = $request->product_id;

            $details = [
                'user_id' => $userId,
                'cart_quantity' => $request->cart_quantity
            ];

            $cartItem = DB::table('user_cart')->where('product_id', $productId)
                                              ->where('user_id', $userId)
                                              ->first();

            if ($cartItem) {
                DB::table('user_cart')->where('product_id', $productId)
                                      ->where('user_id', $userId)
                                      ->update($details);
                $message = 'Cart updated successfully.';
            } else {
                DB::table('user_cart')->insert(array_merge($details, ['product_id' => $productId]));
                $message = 'Item added to cart.';
            }

            return response()->json(['message' => $message], 200);

        } catch (Exception $e) {
            Log::error($e);
            return response()->json(['message' => 'Error occurred while processing.'], 500);
        }
    }

    public function viewYourCart(Request $request) {

        $userId = Auth::user()->id;
        $count = DB::table('user_cart')->where(['user_id' => $userId])->count();
        if($count > 0){

        $data = $this->headerData();
        $data['info'] = DB::table('product as P')
                    ->where('UC.user_id', $userId)
                    ->join('user_cart as UC', 'UC.product_id', '=', 'P.id')
                    ->get();

        return view('front.pages.user-cart',compact('data'));

        }else{
            return redirect()->route('cartempty');
        }
        
    }

    public function removeFromCart(Request $request) {
        try {
            $userId = Auth::user()->id;
            $productId = $request->product_id;

            $deletedRows = DB::table('user_cart')->where('user_id', $userId)
                                                 ->where('product_id', $productId)
                                                 ->delete();

            if ($deletedRows > 0) {
                $message = 'Item removed from cart.';
            } else {
                $message = 'No item found to remove from cart.';
            }

            return response()->json(['message' => $message], 200);

        } catch (Exception $e) {
            Log::error($e);
            return response()->json(['message' => 'Error occurred while processing.'], 500);
        }
    }

    public function cartempty(Request $request) {
        try {
            $userId = Auth::user()->id;
            $data = $this->headerData();
            $data['products'] = Product::get();

            return view('front.pages.cart.cart-empty',compact('data'));
         } catch (Exception $e) {
            Log::error($e);
            return response()->json(['message' => 'Error occurred while processing.'], 500);
        }
    }



}
