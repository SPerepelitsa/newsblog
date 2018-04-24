@extends('admin_main')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-primary btn-block">Create
                Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of a .row-->

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach($posts as $post)

                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{substr(strip_tags($post->title), 0,60)}} {{strlen(strip_tags($post->title)) > 60 ? " ..." : ""}}</td>
                        <td>{{substr(strip_tags($post->body), 0, 120)}} {{strlen(strip_tags($post->body)) > 120 ? " ..." : ""}}</td>
                        <!--view only part of a post, from 0 to 120 symbol-->
                        <td>{{$post->created_at->format("d.m.Y H:i:s")}}</td>
                        <!--  ->diffForHumans() - days past format of viewing -->
                        <td>
                            <div class="btn-group">
                                <button><a href="{{ route('posts.show', $post->id) }}"><i class="fa fa-eye"></i></a>
                                </button>
                                <button><a href="{{ route('posts.edit', $post->id) }}"><i
                                                class="fa fa-pencil text-warning"></i></a></button>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post" role="form"
                                      class="postForm">
                                    {{ method_field('DELETE') }}
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <button type="submit"
                                            onclick='return confirm("Are you sure you want to delete this post?");'><i
                                                class="fa fa-trash text-danger"></i></button>
                                </form>
                            </div>
                        </td>

                @endforeach

                </tbody>
            </table>
            <div class="text-center">
            {!! $posts->links() !!} <!-- pagination (links - default method for pagination, we can also use render method) -->
            </div>
        </div>
    </div>

@stop



