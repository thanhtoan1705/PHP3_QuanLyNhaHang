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
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Table\TableController as TableTableController;
use App\Http\Controllers\Admin\Table\TableBookController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Auth\AccountController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\Gallery\GalleryController;
use App\Http\Controllers\Client\Table\TableController as ClientTableController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('chi-tiet-mon-an', [DishController::class, 'dishDetail'])->name('dishDetail');
Route::get('menu', [DishController::class, 'menu'])->name('menu');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index']);
Route::get('bai-viet', [BlogController::class, 'index'])->name('blog');
Route::get('bai-viet-chi-tiet', [BlogDetailController::class, 'index'])->name('blog.detail');
Route::get('lien-he', [ContactController::class, 'index'])->name('contact');
Route::get('/dat-ban', [ClientTableController::class, 'index'])->name('tableClient');
Route::post('/dat-ban', [ClientTableController::class, 'store'])->name('tableClient.store');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account');
Route::get('gio-hang', [CartController::class, 'index'])->name('cart');
Route::get('thanh-toan', [CheckoutController::class, 'index'])->name('checkout');



Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', 'role:admin']);
// login
Route::get('admin/login', [AuthUserController::class, 'login'])->name('admin.login');


Route::name('dish.')->group(function () {
    Route::get('dish', [AdminDishController::class, 'list'])->name('list')->middleware(['auth', 'role:admin']);
    Route::get('dish/add', [AdminDishController::class, 'add'])->name('add')->middleware(['auth', 'role:admin']);
    Route::post('dish/store', [AdminDishController::class, 'store'])->name('store')->middleware(['auth', 'role:admin']);
    Route::get('dish/edit/{slug}', [AdminDishController::class, 'edit'])->name('edit')->middleware(['auth', 'role:admin']);
    Route::put('dish/update/{slug}', [AdminDishController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::delete('dish/delete/{slug}', [AdminDishController::class, 'delete'])->name('delete')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);



Route::name('table-book.')->group(function () {
    Route::get('table-book', [TableBookController::class, 'index'])->name('list');
    Route::get('table-book/add', [TableBookController::class, 'add'])->name('add');
    Route::post('table-book/store', [TableBookController::class, 'store'])->name('store');
    Route::get('table-book/edit/{id}', [TableBookController::class, 'edit'])->name('edit');
    Route::put('table-book/update/{id}', [TableBookController::class, 'update'])->name('update');
    Route::delete('table-book/destroy/{id}', [TableBookController::class, 'destroy'])->name('destroy');
    Route::get('table-book/table-details/{id}', [TableBookController::class, 'getTableDetails'])->name('table-details');
})->middleware('auth');



Route::name('table.')->group(function () {
    Route::get('table', [TableTableController::class, 'index'])->name('list')->middleware(['auth', 'role:admin']);
    Route::get('table/add', [TableTableController::class, 'add'])->name('add')->middleware(['auth', 'role:admin']);
    Route::post('table/store', [TableTableController::class, 'store'])->name('store')->middleware(['auth', 'role:admin']);
    Route::get('table/edit/{id}', [TableTableController::class, 'edit'])->name('edit')->middleware(['auth', 'role:admin']);
    Route::put('table/update/{id}', [TableTableController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::delete('table/delete/{id}', [TableTableController::class, 'destroy'])->name('delete')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);



// Staff
Route::get('staff/list', [StaffController::class, 'list'])->name('staff.list')->middleware(['auth', 'role:admin']);
Route::get('staff/add', [StaffController::class, 'add'])->name('staff.add')->middleware(['auth', 'role:admin']);

Route::post('staff/store', [StaffController::class, 'store'])->name('staff.store')->middleware(['auth', 'role:admin']);
Route::get('staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit')->middleware(['auth', 'role:admin']);
Route::put('staff/update/{id}', [StaffController::class, 'update'])->name('staff.update')->middleware(['auth', 'role:admin']);
Route::get('staff/delete/{id}', [StaffController::class, 'delete'])->name('staff.delete')->middleware(['auth', 'role:admin']);



// Order
Route::get('order', [OrderController::class, 'index'])->name('order.list')->middleware(['auth', 'role:admin']);
Route::get('order/detail', [OrderController::class, 'detail'])->name('order.detail')->middleware(['auth', 'role:admin']);
Route::get('payment', [PaymentController::class, 'index'])->name('payment.list')->middleware(['auth', 'role:admin']);



//user
Route::name('user.')->group(function () {
    Route::get('user/list', [UserController::class, 'index'])->name('list')->middleware(['auth', 'role:admin']);
    Route::get('user/create', [UserController::class, 'create'])->name('create')->middleware(['auth', 'role:admin']);
    Route::post('user/store', [UserController::class, 'store'])->name('store')->middleware(['auth', 'role:admin']);
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('edit')->middleware(['auth', 'role:admin']);
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::delete('user/delete/{id}', [UserController::class, 'destroy'])->name('destroy')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);



// post
Route::name('post.')->group(function () {
    Route::get('post/list', [PostController::class, 'index'])->name('list')->middleware(['auth', 'role:admin']);
    Route::get('post/create', [PostController::class, 'create'])->name('create')->middleware(['auth', 'role:admin']);
    Route::post('post/store', [PostController::class, 'store'])->name('store')->middleware(['auth', 'role:admin']);
    Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('edit')->middleware(['auth', 'role:admin']);
    Route::put('post/update/{id}', [PostController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::delete('post/delete/{id}', [PostController::class, 'destroy'])->name('destroy')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);



//Category
Route::name('category.')->group(function () {
    Route::get('category', [CategoryController::class, 'list'])->name('list')->middleware(['auth', 'role:admin']);
    Route::get('category/add', [CategoryController::class, 'add'])->name('add')->middleware(['auth', 'role:admin']);
    Route::post('category/store', [CategoryController::class, 'store'])->name('store')->middleware(['auth', 'role:admin']);
    // Route để hiển thị form cập nhật
    Route::get('/categories/edit/{slug}', [CategoryController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::post('/categories/update/{slug}', [CategoryController::class, 'processUpdate'])->name('processUpdate')->middleware(['auth', 'role:admin']);
    Route::delete('category/{id}', [CategoryController::class, 'delete'])->name('delete')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);



//comment
Route::get('comment', [CommentController::class, 'index'])->name('comment.list')->middleware(['auth', 'role:admin']);
