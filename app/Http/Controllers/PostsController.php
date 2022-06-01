<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function list (Request $request)
    {
        $posts = Post::get();

        return view('list_post', compact('posts'));

    }
}
