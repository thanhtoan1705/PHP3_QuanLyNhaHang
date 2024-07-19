<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\UserController as AuthUserController;
use App\Http\Controllers\Admin\Customer\CustomerController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\Gallery\GalleryController;

Route::get('/', [HomeController::class, 'index']);
Route::get('dish_detail', [DishController::class, 'dishDetail']);
Route::get('menu', [DishController::class, 'menu']);
Route::get('cart', [CartController::class, 'index']);
Route::get('checkout', [CheckoutController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('gallery', [GalleryController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('404', [ErrorController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('blog', [BlogController::class, 'index']);
Route::get('blogDetail', [BlogDetailController::class, 'index']);


Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('user/list', [UserController::class, 'index'])->name('user.list');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::get('user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('admin/login', [AuthUserController::class, 'login'])->name('admin.login');
