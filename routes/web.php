<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BookController;
Route::resource('book', BookController::class);

use App\Http\Controllers\CategoryController;
Route::resource('category', CategoryController::class);

// Route::get('/book', [BookController::class, 'index']);
// Route::get('/book_insert', [BookController::class, 'create']);
// Route::post('/book_insert_submit', [BookController::class, 'store']);