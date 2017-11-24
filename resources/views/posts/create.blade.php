@extends("layouts.app")

@section("content")
    <h1>Post Edit</h1>

   {!! Form::open(['action' => 'PostsController@update', "method"=>"POST"]) !!}
        <div class="form-group">
            {{ Form::label("title", "Title", ['class' => 'control-label']) }}
            {{ Form::text("title",$post->title , ['class' => 'form-control', "placeholder"=>"Title"]) }}
        </div>
        <div class="form-group">
            {{ Form::label("body", "Body", ['class' => 'control-label']) }}
            {{ Form::textarea("body",$post->body , ["id"=>"article-ckeditor",'class' => 'form-control', "placeholder"=>"Body"]) }}
        </div>
        {{ Form::submit('Create Post', ["class"=>"btn btn-default"]) }}
    {!! Form::close() !!}
@endsection