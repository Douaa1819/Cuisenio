<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterEmail;
use App\Models\Medias;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use App\Events\UserSubscribed;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Newsletter\Facades\Newsletter as FacadesNewsletter;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:members,email'
        ]);

        event(new UserSubscribed($request->input('email')));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
   

    

    public function sendNewsletter($id)
    {
        $subscribers = Member::where('status', 'subscribed')->get();

        $newsletter = FacadesNewsletter::findOrFail($id);

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterEmail($newsletter->title, $newsletter->content, $newsletter->media, $subscriber->email));
        }
        $newsletter->update(['status' => 'published']);


        return redirect()->back()->with('success', 'Newsletter sent successfully to all subscribers!');
    }
}
