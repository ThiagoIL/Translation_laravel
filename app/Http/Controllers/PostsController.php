<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostPtbr;

class PostsController extends Controller
{
    public function list (Request $request, $lang)
    {

        $posts = PostPtbr::get();

        return view('list_post', compact('posts'));

    }
}
