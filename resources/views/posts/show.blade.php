@extends('layouts.app')

@section('content')
<h1>{{$post->title}}</h1>
{{$post->content}}
<br />
<a href={{route('posts.edit', $post->id)}}>edit</a>
@endsection

@section('footer')
@endsection
