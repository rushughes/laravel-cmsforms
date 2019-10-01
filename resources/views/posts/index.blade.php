@extends('layouts.app')

@section('content')

<h1>Post Index</h1>

<ul>
  @foreach ($posts as $post)
    <li>
      <a href="{{route('posts.show', $post->id)}}">
        {{$post->title}}
      </a>
    </li>
  @endforeach
</ul>
<a href={{route('posts.create', $post->id)}}>new</a>
@endsection

@section('footer')
@endsection
