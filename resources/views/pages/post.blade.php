@extends('layout.default')

@section('content')
    <div class="container">
        @if($post)
            @if($post->image_url)
                <img src="{{ $post->image_url }}" alt="Post Image">
            @endif

            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <small>{{ $post->category }}</small>

            @include('components.createcomment')
            @include('components.comments')
        @else
            <p>Post not found.</p>
        @endif
    </div>
@endsection
