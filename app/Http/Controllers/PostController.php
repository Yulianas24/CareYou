<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts', [
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.post', [
            "title" => "single Post",
            "post" => $post,
        ]);
    }
}
