<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("admin.index", compact("posts"));
    }
}
