<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentCommentController extends Controller
{
    public function show($id)
    {
        $content =  Content::find($id);
        $comments = $content->comments()->with('user')->get();
        $authId = Auth::id();

        return response()->json(['comments' => $comments, 'authId' => $authId]);
    }


    public function store(CommentRequest $request)
    {

        $commentable_type = 'App\Models\\' . $request->input('commentable_type');
        $commentable_id = $request->input('commentable_id');
        $body = $request->input('body');
        $userID = Auth::user()->id;

        $commentable = $commentable_type::find($commentable_id);

        if (!$commentable) {
            return response()->json(['error' => 'Commentable entity not found']);
        }
        $comment = $commentable->comments()->create([
            'body' => $body,
            'user_id' => $userID
        ]);

        if ($comment) {
            return response()->json(['comment' => $comment, "idComent" => $commentable_id]);
        } else {
            return  response()->json(['error' => 'Failed to add comment']);
        }
    }


    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }
}
