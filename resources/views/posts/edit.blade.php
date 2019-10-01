@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

{!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'patch']) !!}
  <div class="form-group">
    {!! Form::label('Title') !!}
    {!! Form::text('title', $post->title, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
  </div>
{!! Form::close() !!}

{!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'delete']) !!}
  <div class="form-group">
    {!! Form::submit('Delete Post', ['class'=>'btn btn-primary']) !!}
  </div>
{!! Form::close() !!}

@endsection

@section('footer')
@endsection
