<?php
namespace App\Http\Controllers\Visitor;
use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;


class NewsLetterController extends Controller
{
   


     public function subscribe(Request $request)
     {
         $validatedData = $request->validate([
             'email' => 'required|email|unique:newsletters,email'
         ]);
     
         Newsletter::create([
             'email' => $validatedData['email'],
             'subscribered' => true
         ]);
     
         return back()->with('success', 'You have subscribed successfully!');
     }
     

   
}
