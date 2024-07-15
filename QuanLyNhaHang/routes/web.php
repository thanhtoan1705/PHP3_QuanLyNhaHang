<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('home', HomeController::class);
Route::resource('cart', CartController::class);
Route::resource('checkout', CheckoutController::class);
