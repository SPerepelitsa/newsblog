@extends('admin_main')

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Post</h1>
            <hr>
            <div class="text-center">
                <br><br>
                <h2>New Post</h2>
                <p>Please make your changes and press "Update" button.</p>
                @include('partials._notifications')
            </div>
            <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data"
                  role="form" class="postForm">
                {{ method_field('PUT') }}
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}"/>
                </div>

                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea class="form-control" name="body" rows="10">{{$post->body}}</textarea>
                </div>

                <br><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!--/.row-->



@stop
