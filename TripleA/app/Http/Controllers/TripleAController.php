<?php

namespace App\Http\Controllers;

use App\Models\Contactmsg;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripleAController extends Controller
{
    public function home(){
        $products=Product::all();
        return view('home',compact('products'));
    }
    public function shop(){
         $products=Product::all();
        return view('shop',compact('products'));
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
   
    public function profile(){
        return view('profile');
    }
    public function order(){
        return view('order');
    }
    public function contactmsgProcess(Request $request){
       $validate =$request->validate([
        'number'=>'min:11|integer|required',
        'subject'=>'min:10|required|string',
        'message'=>'min:10|required|string'
       ]);
       $validate['user_id']=Auth::user()->id;
       $create=Contactmsg::create($validate);
       if($create){
        return redirect()->route('contact')->with('message','your message has been recieved we will give you a call');
       }
       else{
         return redirect()->route('contact')->with('message','An error occurred pls retry or check back later ');
       }
    }
   
}
