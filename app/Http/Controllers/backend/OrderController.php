<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    

    public function __construct(){

    	$this->middleware('auth:admin');
    }

    public function newOrder(){
    $orders =DB::table('orders')->where('status','0')->get();

    return view('admin.order.pending',compact('orders'));

    }

    public function singleView($id){

    	 $order =DB::table('orders')
    	         ->join('users','orders.user_id','users.id')
    	         ->select('orders.*','users.name','users.email')
    	         ->where('orders.id',$id)
    	         ->first();

    	       //  dd($orders);

    	   $shipping =DB::table('shipping')->where('order_id',$id)->first();  
    	   
    	  $details=DB::table('orders_details') 
                        ->join('products','orders_details.product_id','products.id')
                        ->select('orders_details.*','products.product_code','products.product_thambnail')
                        ->where('orders_details.order_id',$id)
                        ->get();

                // dd($order_details);   


           return view('admin.order.order_view',compact('order','shipping','details'));         



    }


    public function paymentAccept(Request $request,$id){

    DB::table('orders')->where('id',$id)->update(['status'=>1]);
     $notification = array(
            'message' => 'payment Accepted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function paymentCancel($id){
          DB::table('orders')->where('id',$id)->update(['status'=>4]);
     $notification = array(
            'message' => 'Order cancel',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
