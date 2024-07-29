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
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Table\TableController as TableTableController;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('chi-tiet-mon-an', [DishController::class, 'dishDetail'])->name('dishDetail');
Route::get('menu', [DishController::class, 'menu'])->name('menu');
Route::get('gio-hang', [CartController::class, 'index'])->name('cart');
Route::get('thanh-toan', [CheckoutController::class, 'index'])->name('checkout');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index']);
// Route::get('dang-ky', [RegisterController::class, 'index'])->name('register');
// Route::get('dang-nhap', [AuthLoginController::class, 'index'])->name('login');
Route::get('bai-viet', [BlogController::class, 'index'])->name('blog');
Route::get('bai-viet-chi-tiet', [BlogDetailController::class, 'index'])->name('blog.detail');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account');
Route::get('lien-he', [ContactController::class, 'index'])->name('contact');
Route::get('dat-ban', [ClientTableController::class, 'index'])->name('table');




Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);



Route::name('dish.')->group(function () {
    Route::get('dish', [AdminDishController::class, 'list'])->name('list');
    Route::get('dish/add', [AdminDishController::class, 'add'])->name('add');
    Route::post('dish/store', [AdminDishController::class, 'store'])->name('store');
    Route::get('dish/edit/{slug}', [AdminDishController::class, 'edit'])->name('edit');
    Route::put('dish/update/{slug}', [AdminDishController::class, 'update'])->name('update');
    Route::delete('dish/delete/{slug}', [AdminDishController::class, 'delete'])->name('delete');
})->middleware('auth');



Route::get('table-book', [TableController::class, 'list'])->name('table-book.list');
Route::get('table-book/add', [TableController::class, 'add'])->name('table-book.add');
Route::get('table-book/edit', [TableController::class, 'edit'])->name('table-book.edit');


Route::name('table.')->group(function () {
    Route::get('table', [TableTableController::class, 'index'])->name('list');
    Route::get('table/add', [TableTableController::class, 'add'])->name('add');
    Route::post('table/store', [TableTableController::class, 'store'])->name('store');
    Route::get('table/edit/{id}', [TableTableController::class, 'edit'])->name('edit');
    Route::put('table/update/{id}', [TableTableController::class, 'update'])->name('update');
    Route::delete('table/delete/{id}', [TableTableController::class, 'destroy'])->name('delete');
})->middleware('auth');


// Staff
Route::get('staff/list', [StaffController::class, 'list'])->name('staff.list');
Route::get('staff/add', [StaffController::class, 'add'])->name('staff.add');

Route::post('staff/store', [StaffController::class, 'store'])->name('staff.store');
Route::get('staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
Route::get('staff/delete/{id}', [StaffController::class, 'delete'])->name('staff.delete');


// Order
Route::get('order', [OrderController::class, 'index'])->name('order.list');
Route::get('order/detail', [OrderController::class, 'detail'])->name('order.detail');
Route::get('payment', [PaymentController::class, 'index'])->name('payment.list');




//user
Route::name('user.')->group(function () {
    Route::get('user/list', [UserController::class, 'index'])->name('list');
    Route::get('user/create', [UserController::class, 'create'])->name('create');
    Route::post('user/store', [UserController::class, 'store'])->name('store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('user/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
})->middleware('auth');



// post
Route::name('post.')->group(function () {
    Route::get('post/list', [PostController::class, 'index'])->name('list');
    Route::get('post/create', [PostController::class, 'create'])->name('create');
    Route::post('post/store', [PostController::class, 'store'])->name('store');
    Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::put('post/update/{id}', [PostController::class, 'update'])->name('update');
    Route::delete('post/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
})->middleware('auth');



// login
Route::get('admin/login', [AuthUserController::class, 'login'])->name('admin.login');



//Category
Route::name('category.')->group(function () {
    Route::get('category', [CategoryController::class, 'list'])->name('list');
    Route::get('category/add', [CategoryController::class, 'add'])->name('add');
    Route::post('category/store', [CategoryController::class, 'store'])->name('store');
    // Route để hiển thị form cập nhật
    Route::get('/categories/edit/{slug}', [CategoryController::class, 'update'])->name('update');
    Route::post('/categories/update/{slug}', [CategoryController::class, 'processUpdate'])->name('processUpdate');
    Route::delete('category/{id}', [CategoryController::class, 'delete'])->name('delete');
})->middleware('auth');



//comment
Route::get('comment', [CommentController::class, 'index'])->name('comment.list');
