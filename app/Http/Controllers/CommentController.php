<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::all();

        return view('user.readMore', compact('comment'));
    }

   
    public function store(CommentRequest $request)
    {
        $commentable_type = 'App\Models\\' . $request->input('commentable_type');
        $commentable_id = $request->input('commentable_id');
        $body = $request->input('body');
        $userID = Auth::user()->id;

        $commentable = $commentable_type::find($commentable_id);

        if (!$commentable) {
            return redirect()->back()->with('error' , 'Commentable entity not found');

        }

        $comment = $commentable->comment()->create([
            'body' => $body,
            'user_id' => $userID
        ]);

        if ($comment) {
            return redirect()->back()->with('success' , 'Comment added successfully!');
        } else {
            return redirect()->back()->with('error' , 'Failed to add comment');

        }
    }





    public function destroy(Comment $comment)
    {
        if ($comment->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        if ($comment->delete()) {
            return response()->json(['success' => 'Comment deleted successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete comment'], 500);
        }
    }
}
