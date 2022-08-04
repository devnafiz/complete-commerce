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


    public function AcceptPayment(Request $request){

          $orders= DB::table('orders')->where('status',1)->get();
          return view('admin.order.pending',compact('orders'));

    }


    public function CancelPayment(){
        $orders= DB::table('orders')->where('status',4)->get();
          return view('admin.order.pending',compact('orders'));


    }

    public function ProcessPayment(){

         $orders= DB::table('orders')->where('status',2)->get();
          return view('admin.order.pending',compact('orders'));
    }

    public function successPayment(){

         $orders= DB::table('orders')->where('status',3)->get();
          return view('admin.order.pending',compact('orders'));
    }



    public function seo(){

        $seo =DB::table('seo')->first();
        return view('admin.coupon.seo',compact('seo'));
    }

     public function updateSeo(Request $request){

            $id=$request->id;

            $data=array();
            $data['meta_title']=$request->meta_title;
            $data['mata_author']=$request->mata_author;
            $data['meta_tag']=$request->meta_tag;
            $data['meta_description']=$request->meta_description;
            $data['google_analytics']=$request->google_analytics;
            $data['bing_analytics']=$request->bing_analytics;
            

            DB::table('seo')->where('id',$id)->update($data);
             $notification = array(
            'message' => 'SEO update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }
}
