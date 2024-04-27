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
        //
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
            return back()->with('error', 'Commentable entity not found');
        }
    
        $comment = $commentable->comment()->create([
            'body' => $body,
            'user_id' => $userID
        ]);
    
        if ($comment) {
            return back()->with('success', 'Comment added successfully!');
        } else {
            return back()->with('error', 'Failed to add comment');
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
