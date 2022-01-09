<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post_id) {
        $post = Post::where("id", $post_id)->with('comments')->first();
        return view("post", compact("post"));
    }

 
}
