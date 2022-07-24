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

    	 $orders =DB::table('orders')
    	         ->join('users','orders.user_id','users.id')
    	         ->select('orders.*','users.name','users.email')
    	         ->where('orders.id',$id)
    	         ->first();

    	       //  dd($orders);

    	   $shipping =DB::table('shipping')->where('order_id',$id)->first();  
    	   
    	  $order_details=DB::table('orders_details') 
                        ->join('products','orders_details.product_id','products.id')
                        ->select('orders_details.*','products.product_code','products.product_thambnail')
                        ->where('orders_details.order_id',$id)
                        ->get();

                // dd($order_details);   


           return view('admin.order.orders_details',compact('orders','shipping','order_details'));         



    }
}
