<?php

namespace App\Http\Controllers;


use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      $post = Post::all();

      return view('post.index')->with(['post' => $post]);
    }

    public function store(Request $request){
       Post::create([
           'title' => $request->title,
           'body' => $request->body
       ]);

       return back();
    }
}
