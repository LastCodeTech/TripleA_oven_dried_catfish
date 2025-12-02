<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;
Route::get('/sign_up',[AuthController::class,'signup'])->name('signup');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/shop',[TripleAController::class,'shop'])->name('shop');
Route::post('/signup.process',[AuthController::class,'signupProcess'])->name('signup.process');
Route::post('/loginProcess',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/',[TripleAController::class,'home'])->name('home');
