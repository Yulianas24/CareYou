<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('pages.posts', [
            "title" => "All Posts",
            "posts" => $posts->paginate(9),
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
