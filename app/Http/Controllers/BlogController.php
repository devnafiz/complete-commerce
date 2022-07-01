<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class BlogController extends Controller
{
    public function blog(){

        $posts =DB::table('posts')
                ->join('post_category','posts.category_id','post_category.id')
                ->select('posts.*','post_category.category_name_en','post_category.category_name_hin')
                ->get();

       //return response()->json($posts);
       return view('frontend.pages.blog',compact($posts));         
    }
}
