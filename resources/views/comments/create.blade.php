@extends('layouts.app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <div>{{ $post->description }}</div>

    <hr>

    <h2>Add comment to Post</h2>

    {!! Form::open(['action' => 'CommentsController@store']) !!}

    {!! Form::hidden('post_id', $post->id) !!}

    <div class="form-group">
        {{Form::label('content', 'Content')}}
        {{Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Comment Text'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection