<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

  public function index () {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }

  public function create () {
    return view('posts.create');
  }

  public function store (Request $request) {
    $this->validate($request, [
      'title' => 'required|max:5'
    ]);
    $post = new Post;
    $post->user_id = 1;
    $post->title = $request->title;
    $post->content = $request->title;
    $post->save();

    return redirect('/posts');
  }

  public function show ($id) {
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
  }

  public function edit ($id) {
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
  }

  public function update (Request $request, $id) {
    $post = Post::findOrFail($id);
    $post->title = $request->title;
    $post->save();

    return redirect('/posts/' . $id);
  }

  public function destroy($id) {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect('/posts');
  }
}
