<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;



Route::get('/', [HomeController::class, 'index']);
Route::get('dish_detail', [DishController::class, 'dishDetail']);
Route::get('menu', [DishController::class, 'menu']);
Route::get('cart', [CartController::class, 'index']);
Route::get('checkout', [CheckoutController::class, 'index']);
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index'])->name('error');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index']);
Route::get('blog', [BlogController::class, 'index']);
Route::get('blogDetail', [BlogDetailController::class, 'index']);



Route::get('dashboard', [DashboardController::class, 'index']);



// Staff
Route::get('staff/list', [StaffController::class, 'list'])->name('staff.list');
Route::get('staff/add', [StaffController::class, 'add'])->name('staff.add');
Route::get('staff/update', [StaffController::class, 'update'])->name('staff.update');



// Order
Route::get('order', [OrderController::class, 'index'])->name('order.list');
Route::get('order/detail', [OrderController::class, 'detail'])->name('order.detail');
Route::get('payment', [PaymentController::class, 'index'])->name('payment.list');


