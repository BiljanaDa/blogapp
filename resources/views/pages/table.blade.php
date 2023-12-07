@extends('layout.default')


@section('content')
    <h1>Welcome to my blog</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/posts/{{ $post->title }}">{{ $post->title }}</a></td>
                        <td>{{ $post->category }}</td>
                        <td>
                            <a href="/deletepost/{{ $post->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
