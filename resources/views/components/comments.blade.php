
@foreach ($post->comments as $comment)
    <div>
        <p>{{ $comment->body }}</p>
        <p>{{ $comment->created_at->diffForHumans() }}</p>
        <a href="/deletecomment/{{ $comment->id }}" class="btn btn-danger">Delete</a>
    </div>
@endforeach