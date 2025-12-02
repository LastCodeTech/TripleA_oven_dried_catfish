<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;
Route::get('/sign_up',[AuthController::class,'signup'])->name('signup');
Route::post('/signup.process',[AuthController::class,'signupProcess'])->name('signup.process');
Route::get('/',[TripleAController::class,'home'])->name('home');
