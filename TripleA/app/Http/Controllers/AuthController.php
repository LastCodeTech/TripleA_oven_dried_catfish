<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(){
        return view('Auth.signup');
    }
    public function login(){
        return view('Auth.login');
    }

    public function signupProcess(Request $request){
        $validate=$request->validate([
            'name'=>'required|min:5|string',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required',
        ]);

        $create=User::create($validate);
        if($create){
            return redirect()->route('home')->with('message','your account has been successfully created');
        }
        else{
             return redirect()->route('signup')->with('message','an error occurred while creating your account ');
        }
    }

public function loginProcess(Request $request){
    $validate=$request->validate([
        'email'=>'required',
        'password'=>'required',
    ]);
    
    $login=Auth::attem($validate);
    if($login){
            return redirect()->route('home')->with('message','your have successfully log in');
        }
        else{
             return redirect()->route('login')->with('message','email or password is incorrect');
        }

}

}
