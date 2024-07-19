<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DishController as AdminDishController;
use App\Http\Controllers\Admin\TableController;
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
Route::get('blog', [BlogController::class, 'index']);
Route::get('blogDetail', [BlogDetailController::class, 'index']);



Route::get('dashboard', [DashboardController::class, 'index']);


Route::get('dish', [AdminDishController::class, 'list'])->name('dish.list');
Route::get('dish/add', [AdminDishController::class, 'add'])->name('dish.add');
Route::get('dish/edit', [AdminDishController::class, 'edit'])->name('dish.edit');



Route::get('table', [TableController::class, 'list'])->name('table.list');
Route::get('table/add', [TableController::class, 'add'])->name('table.add');
Route::get('table/edit', [TableController::class, 'edit'])->name('table.edit');



