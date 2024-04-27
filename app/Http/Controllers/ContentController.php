<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('user.blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

   
    public function store(ContentRequest $request)
    {
        try{
       $data = $request->validated();
       $userId = Auth::user()->id;
       $data['userId']=$userId;
       $data=Content::create($data);
        }catch(\Exception $e){

            Log::error("Failed to creat blog: " . $e->getMessage());
            return back()->withErrors('Failed creat blog. Please try again.');
        }

        return redirect()->back()->with('success', 'Blog created successfully!');
    }

 
    public function show(Content $content)
    {
        //
    }


    public function edit(Content $content)
    {
        //
    }


    public function update(ContentRequest $request, Content $content)
    {
        try{
            $data = $request->validated();
            $userId = Auth::user()->id;
            $data['userId']=$userId;
            $data->update();
             }catch(\Exception $e){
     
                 Log::error("Failed to update blog: " . $e->getMessage());
                 return back()->withErrors('Failed update blog. Please try again.');
             }
     
             return redirect()->back()->with('success', 'Blog updated successfully!');
    }

    public function destroy(Content $content)
    {
   if($content->delete()) {
    return redirect()->back()->with('success', 'Blog deleted successfully!');
   }else{
    return redirect()->back()->with('error', 'Blog deleted successfully!');
   }
    }
}
