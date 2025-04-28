<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Store a new comment for a post
    public function store(Request $request, $postId)
    {
        $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        $post->comments()->create([
            'commenter_name' => $request->commenter_name,
            'comment' => $request->comment,
        ]);

        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully!');
    }
}
