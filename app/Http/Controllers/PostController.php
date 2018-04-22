<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    //
    public function index(Request $request)
    {
    	 $member = $request->search;
       $post = Post::where('title','LIKE','%'.$request->search."%")->get();

    	return view('postajax')->with('x',$post);
    }
}
