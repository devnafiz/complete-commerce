<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;
use Auth;
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



    public function showCart(){

       $cart =Cart::content();
          //dd($cart);

       return view('frontend.pages.cart',compact('cart'));

    }


    public function removeCart($rowId){


        Cart::remove($rowId);
        return redirect()->back()->with('success','cart remove successfully');
    }

    public function updateCartItem(Request $request){

     $rowId=$request->productId;
     $qty =$request->qty;

     Cart::update($rowId,$qty);
     return redirect()->back()->with('success','cart update successfully');

    }


    //quick view

    public function ViewProduct($id){
          //dd($id);
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

                 //return response()->json($product);
                return response::json(array(
                    'product'=>$product,
                    'color'=>$product_color,
                    'size'=>$product_size

                ));

    }

    public function productInsertCart(Request $request){

        $product_id=$request->product_id;
         $product =DB::table('products')->where('id',$product_id)->first();
        $data =array();

        if($product->discount_price==NULL){
            $data['id']=$product->id;
            $data['name']=$product->product_name_en;
            $data['qty']=$request->qty;
            $data['price']=$product->selling_price;
            $data['weight']=1;
            $data['options']['size']=$request->size;
            $data['options']['color']=$request->color;
            $data['options']['image']=$product->product_thambnail;
            Cart::add($data);
          // return \Response::json(['success'=>'Product add to Cart']);
             return redirect()->back()->with('success','cart update successfully');

        }else{

              $data['id']=$product->id;
            $data['name']=$product->product_name_en;
            $data['qty']=$request->qty;
            $data['price']=$product->discount_price;
            $data['weight']=1;
            $data['options']['image']=$product->product_thambnail;
             $data['options']['size']=$request->size;
            $data['options']['color']=$request->color;
            Cart::add($data);
            //return \Response::json(['success'=>'Product add to Cart']);
             return redirect()->back()->with('success','cart update successfully');


        }

    }

    //checkout 

    public function CheckOut(){

        if(Auth::check()){

    $cart =Cart::content();
          //dd($cart);

       return view('frontend.pages.checkout',compact('cart'));
        }else{

            return redirect()->route('login')->with('success','Please Login ');
        }
    }



    public function wishlist(Request $request){

        $user_id =Auth::id();

        $products=DB::table('wishlists')
                 ->join('products','wishlists.product_id','products.id')
                 ->select('products.*','wishlists.user_id')
                 ->where('wishlists.user_id',$user_id)
                 ->get();


         return view('frontend.pages.wishlist',compact('products'));        

    }
}
