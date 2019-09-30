@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

<form method="POST" action="/posts/{{$post->id}}">
  @csrf
  <input name="_method" type="hidden" value="PUT">
  <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
  <input type="submit" name="submit">
</form>

<form method="POST" action="/posts/{{$post->id}}">
  @csrf
  <input name="_method" type="hidden" value="DELETE">
  <input type="submit" name="delete" value="delete">
</form>

@endsection

@section('footer')
@endsection
