@extends('layouts.app')

@section('content')
    <h1>Add new Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Body')}}
        {{Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection