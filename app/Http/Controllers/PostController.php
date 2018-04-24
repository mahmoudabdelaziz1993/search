<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    //------------------- search input only ------------------
    public function index(Request $request)
    {
    	 $member = $request->search;
       $post = Post::where('title','LIKE','%'.$request->search."%")->get();

    	return view('postajax')->with('x',$post);
    }

    //-------------------------- auther only ---------------------
     public function cats(Request $request)
    {
    	 $member = $request->cts;
       $post = Post::whereIn('user_id',$member)->get();
    	return view('postajax')->with('x',$post);
    	
    }
    //---------------------------------category only ----------------
  public function caats(Request $request)
    {
    	 $member = $request->cts;
       $post = Post::whereIn('category_id',$member)->get();
    	return view('postajax')->with('x',$post);
    	
    }


    //------------------------------------ search with cat

   public function searchauth(Request $request)
  {
  	# code...
  	 $member = $request->auth;

  	$post = Post::whereIn('auther',$member)->orWhereIn('category_id',$member)->where('title','LIKE','%'.$request->search."%")->get();
    	return view('postajax')->with('x',$post);

  }


}