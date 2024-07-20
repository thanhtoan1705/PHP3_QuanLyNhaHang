<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\DishController as AdminDishController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Auth\AccountController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('chi-tiet-mon-an', [DishController::class, 'dishDetail'])->name('dishDetail');
Route::get('menu', [DishController::class, 'menu'])->name('menu');
Route::get('gio-hang', [CartController::class, 'index'])->name('cart');
Route::get('thanh-toan', [CheckoutController::class, 'index'])->name('checkout');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index']);
Route::get('dang-ky', [RegisterController::class, 'index'])->name('regiter');
Route::get('dang-nhap', [LoginController::class, 'index'])->name('login');
Route::get('bai-viet', [BlogController::class, 'index'])->name('blog');
Route::get('bai-viet-chi-tiet', [BlogDetailController::class, 'index'])->name('blogDetail');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account');



Route::get('dashboard', [DashboardController::class, 'index']);



// Staff
Route::get('staff/list', [StaffController::class, 'list'])->name('staff.list');
Route::get('staff/add', [StaffController::class, 'add'])->name('staff.add');
Route::get('staff/update', [StaffController::class, 'update'])->name('staff.update');



// Order
Route::get('order', [OrderController::class, 'index'])->name('order.list');
Route::get('order/detail', [OrderController::class, 'detail'])->name('order.detail');
Route::get('payment', [PaymentController::class, 'index'])->name('payment.list');

Route::get('dish', [AdminDishController::class, 'list'])->name('dish.list');
Route::get('dish/add', [AdminDishController::class, 'add'])->name('dish.add');
Route::get('dish/edit', [AdminDishController::class, 'edit'])->name('dish.edit');



Route::get('table', [TableController::class, 'list'])->name('table.list');
Route::get('table/add', [TableController::class, 'add'])->name('table.add');
Route::get('table/edit', [TableController::class, 'edit'])->name('table.edit');



