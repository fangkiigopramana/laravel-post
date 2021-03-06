<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            // "posts" => Post::all()
            "posts" => Post::   with(['author','category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
