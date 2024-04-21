<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index()
    {  
           return view('admin.index');
    }



 
    public function shwoUserAcces()
    {
        return view('admin.User-acces');
    }

  
}
