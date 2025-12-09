<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TripleAController;
use Illuminate\Support\Facades\Route;

Route::get('/sign_up', [AuthController::class, 'signup'])->name('signup');
Route::get('/header', [AuthController::class, 'header'])->name('header');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/signup.process', [AuthController::class, 'signupProcess'])->name('signup.process');
Route::post('/logout.process', [AuthController::class, 'logoutProcess'])->name('logout.process');
Route::post('/login.process', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/blog', [TripleAController::class, 'blog'])->name('blog');
Route::get('/', [TripleAController::class, 'home'])->name('home');
Route::post('/contactmsg.process', [TripleAController::class, 'contactmsgProcess'])->name('contactmsg.process');
Route::post('/cart/add', [TripleAController::class, 'cartAdd'])->name('cart.add');
Route::post('/cart/update/{id}', [TripleAController::class, 'UpdateCartQty'])->name('UpdateCartQty');
Route::delete('/cart/delete/{id}', [TripleAController::class, 'deleteItem'])->name('deleteItem');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [TripleAController::class, 'cart'])->name('cart');
    Route::get('/contact', [TripleAController::class, 'contact'])->name('contact');
    Route::get('/dashboard', [TripleAController::class, 'dashboard'])->name('dashboard');
    Route::get('/gallery', [TripleAController::class, 'gallery'])->name('gallery');
    Route::get('/shop', [TripleAController::class, 'shop'])->name('shop');
    Route::get('/about', [TripleAController::class, 'about'])->name('about');
    Route::get('/checkout', [TripleAController::class, 'checkout'])->name('checkout');
    Route::get('/support', [TripleAController::class, 'support'])->name('support');
    Route::get('/profile', [TripleAController::class, 'profile'])->name('profile');
    Route::get('/order', [TripleAController::class, 'order'])->name('order');



    Route::get('cart/api_class', [AuthController::class, 'apiClass'])->name('api.page');



    // Route::get('/checkout', [CheckoutController::class, 'showCheckout'])
    //     ->name('checkout');


    Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])
        ->name('checkout.process');


    Route::get('/payment/callback', [CheckoutController::class, 'paymentCallback'])
        ->name('payment.callback');


    // Route::post('/paystack/webhook', [CheckoutController::class, 'handleWebhook'])
    //     ->name('payment.webhook')
    //     ->withoutMiddleware([VerifyCsrfToken::class]);


    Route::get('/checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');


    Route::get('/checkout/failed', [CheckoutController::class, 'failed'])
        ->name('checkout.failed');
});
