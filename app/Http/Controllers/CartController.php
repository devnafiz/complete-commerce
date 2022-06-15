<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class CartController extends Controller
{
    public function AddCart(Request $request,$id){


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

    public function check(Request $request){

           $content =Cart::content();

           //dd($content);


           return response()->json($content);
    }


    public function productDetails(Request $request,$id){

        
    }
}
