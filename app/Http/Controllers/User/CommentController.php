<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $c = new Comment();
        $c->user_id = Auth::id();
        $c->post_id = $id;
        $c->comment = $request->comment;
        $c->save();
        return back();
    }
}
