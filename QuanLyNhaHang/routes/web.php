<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DishController as AdminDishController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Comment\CommentController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\UserController as AuthUserController;
use App\Http\Controllers\Admin\Customer\CustomerController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Auth\AccountController;
use App\Http\Controllers\Client\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\Gallery\GalleryController;
use App\Http\Controllers\Client\Table\TableController as ClientTableController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('chi-tiet-mon-an', [DishController::class, 'dishDetail'])->name('dishDetail');
Route::get('menu', [DishController::class, 'menu'])->name('menu');
Route::get('gio-hang', [CartController::class, 'index'])->name('cart');
Route::get('thanh-toan', [CheckoutController::class, 'index'])->name('checkout');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index']);
Route::get('dang-ky', [RegisterController::class, 'index'])->name('register');
Route::get('dang-nhap', [AuthLoginController::class, 'index'])->name('login');
Route::get('bai-viet', [BlogController::class, 'index'])->name('blog');
Route::get('bai-viet-chi-tiet', [BlogDetailController::class, 'index'])->name('blog.detail');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account');
Route::get('lien-he', [ContactController::class, 'index'])->name('contact');
Route::get('dat-ban', [ClientTableController::class, 'index'])->name('table');



Route::get('dashboard', [DashboardController::class, 'index']);



Route::name('dish.')->group(function () {
    Route::get('dish', [AdminDishController::class, 'list'])->name('list');
    Route::get('dish/add', [AdminDishController::class, 'add'])->name('add');
    Route::post('dish/store', [AdminDishController::class, 'store'])->name('store');
    Route::get('dish/edit/{slug}', [AdminDishController::class, 'edit'])->name('edit');
    Route::put('dish/update/{slug}', [AdminDishController::class, 'update'])->name('update');
    Route::delete('dish/delete/{slug}', [AdminDishController::class, 'delete'])->name('delete');
});



Route::get('table', [TableController::class, 'list'])->name('table.list');
Route::get('table/add', [TableController::class, 'add'])->name('table.add');
Route::get('table/edit', [TableController::class, 'edit'])->name('table.edit');


// Staff
Route::get('staff/list', [StaffController::class, 'list'])->name('staff.list');
Route::get('staff/add', [StaffController::class, 'add'])->name('staff.add');
Route::get('staff/update', [StaffController::class, 'update'])->name('staff.update');



// Order
Route::get('order', [OrderController::class, 'index'])->name('order.list');
Route::get('order/detail', [OrderController::class, 'detail'])->name('order.detail');
Route::get('payment', [PaymentController::class, 'index'])->name('payment.list');



Route::get('user/list', [UserController::class, 'index'])->name('user.list');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::get('user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('admin/login', [AuthUserController::class, 'login'])->name('admin.login');

Route::get('category', [CategoryController::class, 'list'])->name('category.list');
Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
Route::get('category/update', [CategoryController::class, 'update'])->name('category.update');


Route::get('comment', [CommentController::class, 'index'])->name('comment.list');
