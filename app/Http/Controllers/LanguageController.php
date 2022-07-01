<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function english(){

           Session::get('lang');

           Session::forget('lang');
           Session::put('lang','english');
           return redirect()->back();
    }

    public function hindi(){

        Session::get('lang');

           Session::forget('lang');
           Session::put('lang','hindi');
           return redirect()->back();
    }
}
