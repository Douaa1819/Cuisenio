<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function store(ReviewRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        Review::create($data);
        return redirect()->back();
    }
  

  
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->back();
    }
}
