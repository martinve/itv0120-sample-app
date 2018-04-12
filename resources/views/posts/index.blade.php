@extends('layouts.app')

@section('content')
    <h1>All posts: {{ count($posts) }}</h1>

        <a href="{{ url('posts/create') }}" class="btn btn-success">Add new Post</a>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>

            @if(Auth::user())
                <a href="{{ url('posts/edit', $post->id) }}" class="btn btn-info">Edit Post</a>
            @endif

            {{  $post->description }}

            <hr>

            <small>
                <strong>Comments: </strong> ({{ count($post->comments) }})
                @if(Auth::user())
                    <a href="{{ url('comments/create', $post->id) }}">Add comment</a>
                @endif
            </small>

            <h4>Comments</h4>
            @foreach($post->comments as $comment)
                {{ $comment->content }}
                <hr>
            @endforeach


        </div>
    @endforeach
@endsection