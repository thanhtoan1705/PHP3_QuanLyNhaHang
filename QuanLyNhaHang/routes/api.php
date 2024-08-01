<?php

use App\Http\Controllers\Admin\Table\TableBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/table-book/table-details/{id}', [TableBookController::class, 'getTableDetails']);
