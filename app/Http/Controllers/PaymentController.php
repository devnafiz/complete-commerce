<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Cart;
use Session;

class PaymentController extends Controller
{
    public function payment(Request $request){

           $data=array();
           $data['name']=$request->name;
           $data['email']=$request->email;
           $data['phone']=$request->phone;
           $data['address']=$request->address;
           $data['city']=$request->city;
           $data['payment']=$request->payment;
           //dd($data);

           if($request->payment=='stripe'){

         return view('frontend.pages.payment.stripe',compact('data'));

           }elseif($request->payment=='paypal'){



           }elseif($request->payment=='ideal'){


           }else{

           	echo "Cash on delvery";
           }
    }


    public function StripeCharge(Request $request){
    	 $total=$request->total;

			    	// Set your secret key. Remember to switch to your live secret key in production.
			// See your keys here: https://dashboard.stripe.com/apikeys
			\Stripe\Stripe::setApiKey('sk_test_qf4foQChU3HMu5y1KHNC5z0k');

			// Token is created using Stripe Checkout or Elements!
			// Get the payment token ID submitted by the form:
			$token = $_POST['stripeToken'];
			$charge = \Stripe\Charge::create([
			  'amount' => $total*100,
			  'currency' => 'usd',
			  'description' => 'Ecommerce details',
			  'source' => $token,
			  'metadata'=>['order_id'=>uniqid()]
			]);
			dd($charge);

			$data =array();

			$data['user_id'] =Auth::id();

			$data['payment_id']=$charge->payment_method;
			$data['paying_amount']=$charge->amount;
			$data['blnc_transection']=$charge->balance_transaction;
			$data['stripe_order_id']=$charge->metadata->order_id;
			$data['shipping']=$request->shipping;
			$data['vat']=$request->vat;

			$data['total']=$request->total;

			if (Session::has('coupon')) {
				$data['subtotal']=Session::get('coupon')['balance'];
			}else{

				 $data['subtotal']=Cart::subtotal();
			}

			$data['status']=0;
			$data['date']=date('d-m-y');
			$data['month']=date('F');
			$data['year']=date('Y');
			$order_id=DB::table('orders')->insertGetId($data);


			//shiping id

			$shipping =array();

			$shipping['order_id']=$order_id;
			$shipping['ship_name'] =$request->ship_name;
			$shipping['ship_phone'] =$request->ship_phone;
			$shipping['ship_email'] =$request->ship_email;
			$shipping['ship_address'] =$request->ship_address;
			$shipping['ship_city'] =$request->ship_city;

			DB::table('shipping')->insert($shipping);


			//ordes detail table


			





			
    }
}
