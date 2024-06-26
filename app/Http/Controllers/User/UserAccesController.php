<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserAccesController extends Controller
{
 
    public function index()
    {
        $users=User::all()->where('role','user');
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
        auth()->logout();
        return redirect('/')->with('success', 'Logged out successfully');
    }
    }
