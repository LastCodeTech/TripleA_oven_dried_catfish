<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;
Route::get('/sign_up',[AuthController::class,'signup'])->name('signup');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/signup.process',[AuthController::class,'signupProcess'])->name('signup.process');
Route::post('/logout.process',[AuthController::class,'logoutProcess'])->name('logout.process');
Route::post('/login.process',[AuthController::class,'loginProcess'])->name('login.process');

Route::middleware('auth')->group(function(){
Route::get('/cart',[TripleAController::class,'cart'])->name('cart');
Route::get('/contact',[TripleAController::class,'contact'])->name('contact');
Route::get('/dashboard',[TripleAController::class,'dashboard'])->name('dashboard');
Route::get('/gallery',[TripleAController::class,'gallery'])->name('gallery');
Route::get('/',[TripleAController::class,'home'])->name('home');
Route::get('/shop',[TripleAController::class,'shop'])->name('shop');
Route::get('/about',[TripleAController::class,'about'])->name('about');
Route::get('/blog',[TripleAController::class,'blog'])->name('blog');
Route::get('/checkout',[TripleAController::class,'checkout'])->name('checkout');
Route::get('/support',[TripleAController::class,'support'])->name('support');
Route::get('/faq',[TripleAController::class,'faq'])->name('faq');


});
