<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
public function  login(){

    return view('auth.login');

}

public function register(){
    return view('auth.register');

}
public function registerUser(Request $request){
$request->validate([
'name'=> ['required', 'string', 'max:255'],
'email'=>'required|email|unique:users',
'password'=>'required|min:6|max:12',

]);
$user = new User();
$user->name =$request->name;
$user->email =$request->email;
$user->password = Hash::make($request->password);
$res = $user->save();
if($res){
return back()->with('succes','You have registered successful');
}else{
    return back()->with('fail','Somthing wrong                                                                                           ');
}

}
}
