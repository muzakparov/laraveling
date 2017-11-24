@extends("layouts.app")

@section("content")
    <h1>Posts Page</h1>

    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <small>Written on {{ $post->created_at }}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <div>No Posts</div>
    @endif
@endsection