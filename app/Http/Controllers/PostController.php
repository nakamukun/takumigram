<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index (POST $post)
    {
        return view("posts/index")->with(["posts" => $post->get()]);
    }
}
