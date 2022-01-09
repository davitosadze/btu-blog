<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insert(Request $request) {
        return Comment::create($request->all());
        return response()->json($request->author);
    }
}
