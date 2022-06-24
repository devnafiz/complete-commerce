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
                 ->select('products.*','categories.category_name_en','sub_categories.subcategory_name_en','brands.brand_name_en')
                 ->where('products.id',$id)
                 //->where('')
                 ->first();

            $color =$product->product_color_en;
            $product_color =explode(',',$color);
            $size =$product->product_size_en;

             $product_size =explode(',', $size);



     return view('frontend.product_details',compact('product','product_color','product_size'));
    }


    public function addCart(Request $request,$id){

          $product =DB::table('products')->where('id',$id)->first();
        $data =array();

        if($product->discount_price==NULL){
            $data['id']=$product->id;
            $data['name']=$product->product_name_en;
            $data['qty']=1;
            $data['price']=$product->selling_price;
            $data['weight']=1;
            $data['options']['size']='';
            $data['options']['color']='';
            $data['options']['image']=$product->product_thambnail;
            Cart::add($data);
           return \Response::json(['success'=>'Product add to Cart']);

        }else{

              $data['id']=$product->id;
            $data['name']=$product->product_name_en;
            $data['qty']=1;
            $data['price']=$product->discount_price;
            $data['weight']=1;
            $data['options']['image']=$product->product_thambnail;
             $data['options']['size']='';
            $data['options']['color']='';
            Cart::add($data);
            return \Response::json(['success'=>'Product add to Cart']);


        }

    }
}
