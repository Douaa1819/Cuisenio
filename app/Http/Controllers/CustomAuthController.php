<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class CustomAuthController extends Controller
{
    public function  login()
    {

        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return redirect()->route('user.index')->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Somthing wrong                                                                                           ');
        }
    }
    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/dashboard');
            } else if ($user->role == 'user') {
                return redirect('/home');
            }
        }
    }
}
