<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest as CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

  public function index () {
    //$posts = Post::all();
    //$posts = Post::latest()->get();
    //$posts = Post::orderBy('id', 'desc')->get();
    //$posts = Post::orderBy('id', 'asc')->get();
    $posts = Post::latest()->get();
    return view('posts.index', compact('posts'));
  }

  public function create () {
    return view('posts.create');
  }

  public function store (CreatePostRequest $request) {

    $input = $request->all();
    $name = null;

    if ($file = $request->file('file')) {
      $name = $file->getClientOriginalName();
      $file->move('uploads', $name);
    }

    $post = new Post;
    $post->user_id = 1;
    $post->title = $request->title;
    $post->content = $request->title;
    $post->path = $name;
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
