<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordLinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.forgetPasswordGetEmail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
            return redirect()->to(route('forgetPassword'))->with('succes', "We have send an email to reset password ");
        });
    }



    public function ResetPassword($token)
    {
        return view('emails.new-password', compact('token'));
    }

    public function NewPassword(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users,email",
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'token' => 'required|exists:password_resets,token'
        ]);

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$updatePassword) {
            return redirect()->back()->with('error', 'invalid Email');
        }

        $updated =  User::where("email", $request->email)->update(['password' => Hash::make($request->password)]);

        if (!$updated) {
            return redirect()->back()->with('error', 'invalid Data');
        }

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
        ])->delete();

        return redirect('/login')->with('success', 'password changed with success');
    }
}
