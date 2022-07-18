<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
