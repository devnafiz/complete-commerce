<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
   public function BlogCategoryAdd(){

    return view('admin.blog.blog_cat_add');
   }


   public function BlogCategory(){

    $data['Blog_categories']=DB::table('post_category')->latest()->get();

    return view('admin.blog.blog_cat_view',$data);
   }



   public function BlogCategoryStore(Request $request){

    $request->validate([
        'category_name_en'=>'required',
        'category_name_hin'=>'required'

    ]);

    $data=array();

    $data['category_name_en']=$request->category_name_en;
    $data['category_name_hin'] =$request->category_name_hin;
 

     DB::table('post_category')->insert($data);

     return redirect()->route('blog.category')->with('success','Successfully  insert');

   }
}
