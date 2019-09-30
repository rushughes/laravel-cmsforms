<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function create () {
    return view('posts.create');
  }

  public function store (Request $request) {
    $post = new Post;
    $post->user_id = 1;
    $post->title = $request->title;
    $post->content = $request->title;
    $post->save();
  }
}
