<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::paginate(5);
        return view("post.list",["posts" => $posts]);
    }
}
