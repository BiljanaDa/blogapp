@extends('layout.default')

@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach ($posts as $post )
    @include('components.post')    
@endforeach
</div>
@endsection