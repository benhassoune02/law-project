<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Idea;

class CommentController extends Controller
{
    public function store(Request $request, Idea $idea)
    {
        $request->validate([
            'comment' => 'required|string|max:1500',
        ]);

        $idea->comments()->create([
            'content' => $request->input('comment'),
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    public function edit(Comment $comment)
    {
        return view('ideas.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string|max:1500',
        ]);

        $comment->update([
            'content' => $request->input('content'),
        ]);

        
        return redirect()->route('idea.show', ['id' => $comment->idea_id]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
