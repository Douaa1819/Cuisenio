<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
 // In your ContentController

public function index()
{
     $contents = Content::with(['comments.user', 'user'])->get();
    return view('user.blog', compact('contents'));
}



public function show(Content $blog)

{

    return view('user.singleBlog',compact('blog'));
}



    public function store(ContentRequest $request)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = Auth::user()->id;

            $content = Content::create($data);

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $path = $request->file('image')->store('images', 'public');
                $content->image()->create(['url' => $path]);
            }
            return redirect()->back()->with('success', 'Blog created successfully!');
        } catch (\Exception $e) {
            Log::error("Failed to create blog: " . $e->getMessage());
            return back()->withErrors('Failed to create blog. Please try again.');
        }
    }

    public function update(ContentRequest $request, Content $content)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = Auth::user()->id;

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $existingImage = $content->image;
                if ($existingImage) {
                    Storage::delete($existingImage->url);
                    $existingImage->delete();
                }
                $path = $request->file('image')->store('images', 'public');
                $content->image()->create(['url' => $path]);
            }

            $content->update($data);
            return redirect()->back()->with('success', 'Blog updated successfully!');
        } catch (\Exception $e) {
            Log::error("Failed to update blog: " . $e->getMessage());
            return back()->withErrors('Failed to update blog. Please try again.');
        }
    }

    public function destroy(Content $content)
    {
        if ($content->delete()) {
            return redirect()->back()->with('success', 'Blog deleted successfully!');
        } else {
            return back()->with('error', 'Error deleting blog.');
        }
    }
}
