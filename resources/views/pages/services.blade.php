@extends("layouts.app")

@section("content")
    <h1>Services Page</h1>
    <ul>
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
@endsection