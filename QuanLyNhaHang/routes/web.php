<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('dish_detail', [DishController::class, 'dishDetail']);
Route::get('menu', [DishController::class, 'menu']);
Route::get('cart', [CartController::class, 'index']);
Route::get('checkout', [CheckoutController::class, 'index']);
