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
    public function get_post($id){
      $post = Post::find($id);

      if ($post == null)
      return response (200);

      return view('post.detail')->with(['post' => $post]);
    }
}
