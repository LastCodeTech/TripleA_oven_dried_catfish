<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripleAController extends Controller
{
    public function home(){
        return view('home');
    }
    public function shop(){
        return view('shop');
    }
    public function about(){
        return view('about');
    }
    public function gallery(){
        return view('gallery');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function checkout(){
        return view('checkout');
    }
    public function support(){
        return view('support');
    }
    public function faq(){
        return view('home');
    }
}
