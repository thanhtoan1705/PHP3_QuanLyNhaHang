<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Comment\CommentController;


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
Route::get('about', [AboutController::class, 'index']);
Route::get('404', [ErrorController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blogDetail', [BlogDetailController::class, 'index'])->name('blog.detail');



Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('category', [CategoryController::class, 'list'])->name('category.list');
Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
Route::get('category/update', [CategoryController::class, 'update'])->name('category.update');


Route::get('comment', [CommentController::class, 'index'])->name('comment.list');


