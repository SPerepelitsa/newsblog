@extends('admin_main')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">Back</a>
        </div>
    </div>

@stop