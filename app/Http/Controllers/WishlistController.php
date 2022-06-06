<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Auth;
use DB;
class WishlistController extends Controller
{
     public function addWishlist($id){
     $user_id =Auth::id();
     $check=DB::table('wishlists')->where('user_id',$user_id)->where('product_id',$id)->first();

     $data = array(


        'user_id' => $user_id,

          'product_id'=>$id
         );

          if(Auth::check()){

            if($check){

                  return \Response::json(['error'=>'That product already has on wishlist']);
               }else{

              DB::table('wishlists')->insert($data);
               return \Response::json(['success'=>'Product add wishlists']);

                
             }







          }else{
              return \Response::json(['error'=>'At first login Your account']);
            //return redirect()->route('login')->with('error','please login');
          }

     }
}
