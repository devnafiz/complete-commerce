<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
   

   public function BrandView(){

            $brands = Brand::latest()->get();
        return view('admin.brand.brand_view',compact('brands'));
   }
}
