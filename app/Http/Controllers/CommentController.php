<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Contribution;


class CommentController extends Controller
{
    public function store(Request $request, Idea $idea)
    {
        $request->validate([
            'comment' => 'required|string|max:1500',
        ]);

        $comment = $idea->comments()->create([
            'content' => $request->input('comment'),
            'user_id' => auth()->id(),
        ]);

        $existingContribution = Contribution::where('user_id', $comment->user_id)
            ->where('idea_id', $idea->id)
            ->first();

        if (!$existingContribution) {
            Contribution::create([
            'user_id' => $comment->user_id,
            'idea_id' => $idea->id
        ]);
    }

        return redirect()->route('contact-user');
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
        $ideaId = $comment->idea_id;
        $userId = $comment->user_id;

        $comment->delete();

        $remainingComments = Comment::where('user_id', $userId)
            ->where('idea_id', $ideaId)
            ->exists();

            if (!$remainingComments) {
                $contribution = Contribution::where('user_id', $userId)
                                            ->where('idea_id', $ideaId)
                                            ->first();
        
                if ($contribution) {
                    $contribution->delete();
                }
            }
            
        return redirect()->back()->with('Answer', 'Comment deleted successfully.');
    }
}
