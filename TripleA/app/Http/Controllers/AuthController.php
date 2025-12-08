<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Newnotification;
use App\Services\ApiSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    private $apiService;

    public function __construct(ApiSchool $apiService)
    {
        $this->apiService = $apiService;
    }


    public function signup()
    {
        return view('Auth.signup');
    }
    public function login()
    {
        return view('Auth.login');
    }

    public function signupProcess(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:5|string',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $create = User::create($validate);
        $create->notify(new Newnotification(''));
        if ($create) {
            return redirect()->route('home')->with('message', 'your account has been successfully created');
        } else {
            return redirect()->route('signup')->with('message', 'an error occurred while creating your account ');
        }
    }

    public function loginProcess(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $login = Auth::attempt($validate);
        $request->session()->regenerate();
        if ($login) {
            return redirect()->route('home')->with('message', 'your have successfully log in');
        } else {
            return redirect()->route('login')->with('message', 'email or password is incorrect');
        }
    }

    public function logoutProcess(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function apiClass()
    {

        $products = [
            'product_id' => 23,
            'price' => 244,
            'product_name' => 'Laptop'
        ];

        session()->put('tripple_a', $products);

        dd(session()->get('tripple_a'));

        // dd(session()->all());
        return $this->apiService->apiSend("https://dummyjson.com/products");
    }
    public function flutterwave()
    {
        return $this->apiService->apiSend("https://dummyjson.com/carts");
    }
}
