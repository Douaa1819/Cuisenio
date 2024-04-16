<?php

namespace App\Http\Controllers;

use App\Services\MailchimpService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Newsletter\Facades\Newsletter;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\Newsletter\Facades\Newsletter as FacadesNewsletter;

class NewsletterController extends Controller
{

    public function store(Request $request)
    {
        try { 
            $request->validate(['user_email' => 'required']);
            if (!Newsletter::isSubscribed($request->user_email)) {
                Newsletter::subscribe($request->user_email);
                return redirect()->back()->with('success', 'You have successfully subscribed.');
            } else {
                return redirect()->back()->with('info', 'Email already subscribed.');
            }
        } catch (\Exception $e) {
            Log::error("Error subscribing to newsletter: " . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}

