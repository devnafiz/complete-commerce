<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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

			    	// Set your secret key. Remember to switch to your live secret key in production.
			// See your keys here: https://dashboard.stripe.com/apikeys
			\Stripe\Stripe::setApiKey('sk_test_qf4foQChU3HMu5y1KHNC5z0k');

			// Token is created using Stripe Checkout or Elements!
			// Get the payment token ID submitted by the form:
			$token = $_POST['stripeToken'];
			$charge = \Stripe\Charge::create([
			  'amount' => 999*100,
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
			$data['blnc_transection']=$charge->amount;
			$data['stripe_order_id']=$charge->amount;
			$data['shipping']=$charge->amount;
			$data['vat']=$charge->amount;

			$data['total']=$charge->amount;


			
    }
}
