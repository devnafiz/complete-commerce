<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class ProductDetailsController extends Controller
{
    public function productDetails($id,$product_name){


        $product =DB::table('products')
                 ->join('categories','products.category_id','categories.id')
                 ->join('sub_categories','products.subcategory_id','sub_categories.id')
                 ->join('brands','products.brand_id','brands.id')
                 ->select('products.*','categories.category_name_en','sub_categories.subcategory_name_en','brands.brands_name_en')
                 


     return view('frontend.product_details');
    }
}
