<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    public function __construct(){

    	$this->middleware('auth::admin');
    }
}
