<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAccesController extends Controller
{
 
    public function index()
    {
        $users=User::all();
        return view('admin.User-acces',compact('users'));
    }

    public function toggleBlock(User $user) {
        $user->is_banned = !$user->is_banned;
        $user->save();

        $message = $user->is_banned ? 'User successfully blocked.' : 'User successfully unblocked.';
        return back()->with('success', $message);
    }

    public function logout()
    {
        if (auth()->check()) { 
             /** @disregard P1013 [tokens function exists and working] **/
            auth()->user()->tokens()->delete(); 
            auth()->logout();
            return redirect('/login')->with('success', 'Logged out successfully');
        }
    
        return redirect('/login')->with('error', 'No user was logged in');
    }
    }
