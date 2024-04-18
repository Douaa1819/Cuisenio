<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
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
'email'=>'required|email',
'password'=>'required|min:6',

]);
$user = new User();
$user->name =$request->name;
$user->email =$request->email;
$user->password = Hash::make($request->password);
$res = $user->save();
if($res){
    return redirect()->route('user.index')->with('success', 'You have registered successfully');
}else{
    return back()->with('fail','Somthing wrong                                                                                           ');
}
}
public function loginUser(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6',

    ]);
    $user=User::where('email','=',$request->email)->first();
    if($user){
        if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId',$user->id);
            if ($user->role === 'admin') {
                return redirect('dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.index')->with('success', 'You have registered successfully');
            } else {
                return redirect('user.index');
            }
        } else {

            return back()->with('fail', 'Password does not match');
        }
    } else {
        // Return back if email is not registered
        return back()->with('fail', 'This email is not registered');
    }
}

}

