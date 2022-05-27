<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    public function BrandAdd(){

       return view('admin.category.category_add');

    }
   

   public function CategoryView(){

            $data['categories'] = Category::latest()->get();
        return view('admin.category.category_view',$data);
   }


   public function CategoryStore(Request $request){

    $request->validate([
            'category_name_en' => 'required',
            'category_name_hin' => 'required',
            'category_icon ' => 'required',
        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_hin.required' => 'Input Category Hindi Name',
        ]);

        $image = $request->file('category_icon');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/category/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

    Category::insert([
        'category_name_en' => $request->category_name_en,
        'category_name_hin' => $request->category_name_hin,
        'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
        'category_slug_hin' => str_replace(' ', '-',$request->category_name_hin),
        'brand_image' => $save_url,

        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);




   }

}
