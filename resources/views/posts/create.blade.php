@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

{!! Form::open(['action'=>'PostsController@store', 'method'=>'post', 'files'=>true]) !!}
<div class="form-group">
  {!! Form::label('File') !!}
  {!! Form::file('file', null, ['class'=>'form-control']) !!}
</div>
  <div class="form-group">
    {!! Form::label('Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
  {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
  </div>
{!! Form::close() !!}

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

@endsection

@section('footer')
@endsection
