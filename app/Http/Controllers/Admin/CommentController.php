<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function delete($comment_id) {
        Comment::find($comment_id)->delete();
        return redirect("/admin");
    }
}
