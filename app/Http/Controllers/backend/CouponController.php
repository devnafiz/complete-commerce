<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Coupon;

class CouponController extends Controller
{
    public function CouponView(){

           $data['coupons']=Coupon::all();

           return view('admin.coupon.view_coupon',$data);

    }

    public function CouponAdd(){

          return view('admin.coupon.add_coupon'); 
    }


    public function CouponStore(Request $request){


        $data=array();
        $data['coupon']=$request->coupon;
        $data['discount']=$request->discount;
        Coupon::insert($data);
        return  redirect()->back()->with('success','data insert');

    }
}
