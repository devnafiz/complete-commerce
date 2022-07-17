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
    }
}
