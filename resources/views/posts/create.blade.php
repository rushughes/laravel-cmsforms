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
