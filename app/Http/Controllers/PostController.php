<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }


        return view('pages.posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->Search(request(['search', 'category', 'user']))->paginate(9),
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
