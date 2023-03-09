<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $validatedData = $request->validate([
            'body' => 'required'
        ]);

        $comment = new Comment;
        $comment->body = $validatedData['body'];
        $comment->post_id = $postId;
        $comment->user_id = rand(1,10); // replace with authenticated user ID
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
