<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{


    public function BrandAdd(){

       return view('admin.brand.brand_add');

    }
   

   public function BrandView(){

            $data['brands'] = Brand::latest()->get();
        return view('admin.brand.brand_view',$data);
   }


   public function BrandStore(Request $request){

    $request->validate([
            'brand_name_en' => 'required',
            'brand_name_hin' => 'required',
            'brand_image' => 'required',
        ],[
            'brand_name_en.required' => 'Input Brand English Name',
            'brand_name_hin.required' => 'Input Brand Hindi Name',
        ]);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

    Brand::insert([
        'brand_name_en' => $request->brand_name_en,
        'brand_name_hin' => $request->brand_name_hin,
        'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
        'brand_slug_hin' => str_replace(' ', '-',$request->brand_name_hin),
        'brand_image' => $save_url,

        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);




   }

   
}
