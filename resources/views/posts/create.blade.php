@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

{!! Form::open(['action'=>'PostsController@store', 'method'=>'post']) !!}
  <div class="form-group">
    {!! Form::label('Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
  {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection

@section('footer')
@endsection
