<?php

use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TripleAController::class,'home'])->name('home');
