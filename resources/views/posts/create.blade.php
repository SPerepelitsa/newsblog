@extends('admin_main')

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Post</h1>
            <hr>
            <div class="text-center">
                <br><br>
                <h2>New Post</h2>
                <p>Please fill in all fields and press "Create" button.</p>
                @include('partials._notifications')
            </div>
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" role="form"
                  class="postForm">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control"
                           placeholder="Please enter your post title."/>
                </div>

                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea class="form-control" name="body" rows="5"
                              placeholder="Please enter your text here."></textarea>
                </div>

                <br><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Create</button>
                </div>
            </form>
        </div>
    </div>
    <!--/.row-->



@stop
