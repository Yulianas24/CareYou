<?php

namespace App\Models;



class post
{
    static $blog_posts = [
        [
            "title" => "Judul post 1",
            "slug" => "judul-post-1",
            "author" => "Yulian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam laudantium harum aut culpa eligendi, porro quidem neque alias doloremque eius provident rerum error odio at eum nisi enim omnis consequatur."
        ],
        [
            "title" => "Judul post 2",
            "slug" => "judul-post-2",
            "author" => "Yulian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam laudantium harum aut culpa eligendi, porro quidem neque alias doloremque eius provident rerum error odio at eum nisi enim omnis consequatur."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();

        return $posts->firstwhere('slug', $slug);
    }
};
