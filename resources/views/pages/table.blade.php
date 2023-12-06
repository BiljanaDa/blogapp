@extends('layout.default')


@section('content')
    <h1>Welcome to my blog</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <td><a href="/posts/ {{ $post->id }}">{{ $post->title }}</a></td>
                    <td>{{ $post->category }}</td>
                    <td><a href="/deletepost/{{ $post->id }}">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
