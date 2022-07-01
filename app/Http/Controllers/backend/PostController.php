<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BlogPost;
use Image;
use Carbon\Carbon;

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












   /// blog list
   public function ListBlogPost(){

    //$data['categories']=DB::table('post_category')->get();
     //$data['Blogs']=DB::table('posts')->latest()->get();
    $data['Blogs']=BlogPost::latest()->get();
     //dd($data['Blogs']);

    return view('admin.blog.blog_view',$data);

   }

   public function AddBlogPost(){
$data['categories']=DB::table('post_category')->get();
  return view('admin.blog.blog_add',$data);

   }

   public function BlogPostStore(Request $request){
    //dd('ok');

           $request->validate([
            'post_title_en' => 'required',
            'post_title_hin' => 'required',
            'post_image' => 'required',
        ],[
            'post_title_en.required' => 'Input Post Title English Name',
            'post_title_hin.required' => 'Input Post Title Hindi Name',
        ]);

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(780,433)->save('upload/post/'.$name_gen);
        $save_url = 'upload/post/'.$name_gen;

    BlogPost::insert([
        'category_id' => $request->category_id,
        'post_title_en' => $request->post_title_en,
        'post_title_hin' => $request->post_title_hin,
        'post_slug_en' => strtolower(str_replace(' ', '-',$request->post_title_en)),
        'post_slug_hin' => str_replace(' ', '-',$request->post_title_hin),
        'post_image' => $save_url,
        'post_details_en' => $request->post_details_en,
        'post_details_hin' => $request->post_details_hin,
        'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Blog Post Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('list.post')->with($notification);


   }
}
