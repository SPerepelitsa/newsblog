<?php

namespace App\Http\Controllers;


use App\Models\Post;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);

        return view('welcome')->with('posts', $posts);
    }

    public function single($id)
    {
        $post = Post::findOrFail($id);

        return view('news.single')->with('post', $post);
    }
}
