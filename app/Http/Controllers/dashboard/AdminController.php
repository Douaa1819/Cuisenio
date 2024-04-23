<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Theme;
use App\Models\User;

class AdminController extends Controller
{
    
    public function index()
    {
        $admin=Auth()->user()->name;
        $user=User::count();
        $recipes=Recipe::count();
        $themes=Theme::count();
           return view('admin.index',compact('user','recipes','themes','admin'));
    }



 
    public function shwoUserAcces()
    {
        return view('admin.User-acces');
    }

  
}
