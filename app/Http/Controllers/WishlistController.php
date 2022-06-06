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

                $notification=array(

                         'message'=>'Already has been wishlisted',
                         'alert-type'=>'error'

                );

                return redirect()->back()->with($notification);

               }else{

              DB::table('wishlists')->insert($data);

                  $notification=array(

                         'message'=>'Add to wishlisted',
                         'alert-type'=>'success'

                );

                return redirect()->back()->with($notification);
             }







          }else{

            return redirect()->route('login')->with('error','please login');
          }

     }
}
