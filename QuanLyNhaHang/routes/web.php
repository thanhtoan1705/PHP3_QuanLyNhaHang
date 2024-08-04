<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Promotion\PromotionController;
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
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Dish\DishController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Blog\BlogDetailController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\Gallery\GalleryController;
use App\Http\Controllers\Client\Table\TableController as ClientTableController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

// // Email Verification Routes
// Route::get('email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('chi-tiet-mon-an/{id}', [DishController::class, 'dishDetail'])->name('dishDetail');
Route::get('menu', [DishController::class, 'menu'])->name('menu');
Route::get('gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('404', [ErrorController::class, 'index']);
Route::get('bai-viet', [BlogController::class, 'index'])->name('blog');
Route::get('blog', [BlogController::class, 'components'])->name('blog.show');
Route::get('bai-viet-chi-tiet/{id}', [BlogDetailController::class, 'show'])->name('blog.detail');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account');
Route::get('lien-he', [ContactController::class, 'index'])->name('contact');
Route::get('dat-ban', [ClientTableController::class, 'index'])->name('tableClient');
Route::post('dat-ban', [ClientTableController::class, 'store'])->name('tableClient.store');
Route::get('tai-khoan', [AccountController::class, 'index'])->name('account')->middleware('auth');
Route::get('thanh-toan', [CheckoutController::class, 'index'])->name('checkout');
Route::get('gio-hang', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::post('them-gio-hang', [CartController::class, 'addToCart'])->name('cartAdd')->middleware('auth');
Route::delete('gio-hang/{id}', [CartController::class, 'remove'])->name('cartRemove')->middleware('auth');
Route::delete('cart/clear', [CartController::class, 'clear'])->name('cart.clear')->middleware('auth');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::post('nhap-ma-uu-dai', [CartController::class, 'applyDiscountCode'])->name('applyDiscountCode')->middleware('auth');



Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'role:admin']);
// login
Route::get('admin/login', [AuthUserController::class, 'login'])->name('admin.login');
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);


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
    Route::get('/categories/edit/{id}', [CategoryController::class, 'update'])->name('update')->middleware(['auth', 'role:admin']);
    Route::post('/categories/update/{id}', [CategoryController::class, 'processUpdate'])->name('processUpdate')->middleware(['auth', 'role:admin']);
    Route::delete('category/{id}', [CategoryController::class, 'delete'])->name('delete')->middleware(['auth', 'role:admin']);
})->middleware(['auth', 'role:admin']);




//Promotion
Route::name('promotion.')->group(function () {
    Route::get('promotion/list', [PromotionController::class, 'list'])->name('list');
    Route::get('promotion/add', [PromotionController::class, 'add'])->name('add');
    Route::post('promotion/store', [PromotionController::class, 'store'])->name('store');
    Route::get('/promotion/edit/{id}', [PromotionController::class, 'update'])->name('update');
    Route::post('/promotion/update/{id}', [PromotionController::class, 'processUpdate'])->name('processUpdate');
    Route::delete('promotion/{id}', [PromotionController::class, 'delete'])->name('delete');
});


//comment
Route::get('comment', [CommentController::class, 'index'])->name('comment.list')->middleware(['auth', 'role:admin']);
