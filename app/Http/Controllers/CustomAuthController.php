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
return back()->with('succes','You have registered successful');
}else{
    return back()->with('fail','Somthing wrong                                                                                           ');
}
}
public function loginUser(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6|max:20',

    ]);
    $user=User::where('email','=',$request->email)->first();
    if($user){
        if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId',$user->id);
            if($user->role === 'admin') {
                return redirect('dashboard');
            } else {
                return redirect('contact');
            }
        }else{
            return back()->with('fail','password not matches');
            }
        
        return back()->with('succes','You have logine successful');
        }else{
            return back()->with('fail','This email not Registered');
        }
}

}

