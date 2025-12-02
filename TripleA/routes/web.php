<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;
Route::get('/sign_up',[AuthController::class,'signup'])->name('signup');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/signup.process',[AuthController::class,'signupProcess'])->name('signup.process');
Route::post('/loginProcess',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/',[TripleAController::class,'home'])->name('home');
Route::get('/shop',[TripleAController::class,'shop'])->name('shop');
Route::get('/about',[TripleAController::class,'about'])->name('about');
Route::get('/gallery',[TripleAController::class,'gallery'])->name('gallery');
Route::get('/blog',[TripleAController::class,'blog'])->name('blog');
Route::get('/contact',[TripleAController::class,'contact'])->name('contact');
