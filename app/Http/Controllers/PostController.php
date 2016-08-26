<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return view("post.list",["posts" => $posts]);
    }
}
