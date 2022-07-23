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
}
