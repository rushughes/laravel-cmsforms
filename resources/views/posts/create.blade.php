@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

{!! Form::open(['route'=>'posts.store', 'method'=>'post']) !!}
{!! Form::text('title') !!}
{!! Form::submit('submit') !!}
{!! Form::close() !!}

@endsection

@section('footer')
@endsection
