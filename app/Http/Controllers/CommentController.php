<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   $comment=Comment::all();
   return view('user.readMore',compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $commentable_type = 'App\Models\\' . $request->input('commentable_type');
        $commentable_id = $request->input('commentable_id');
        $body = $request->input('body');
        $userID = Auth::user()->id;

        $commentable = $commentable_type::find($commentable_id);

        if (!$commentable) {
            return response()->json(['error' => 'Commentable entity not found'], 404);
        }

        $comment = $commentable->comment()->create([
            'body' => $body,
            'user_id' => $userID
        ]);

        if ($comment) {
            return response()->json(['success' => 'Comment added successfully!', 'comment' => $comment], 200);
        } else {
            return response()->json(['error' => 'Failed to add comment'], 500);
        }
    }





    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }


    

    /**
     * Remove the specified resource from storage.
     */
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
