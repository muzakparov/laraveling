@extends("layouts.app")

@section("content")
    <a href="/posts">Back</a>
    
    <h2>{{ $post->title }}</h2>
    <p>{!! $post->body !!}</p>
    <small>Written on {{ $post->created_at }}</small>
     
@endsection