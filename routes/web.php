<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function(){
    Route::get('/games', [ProductsController::class, 'games']);
    Route::get('/magang', [ProductsController::class, 'magang']);
    Route::get('/kunjungan', [ProductsController::class, 'kunjungan']);
});

route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

Route::get('/about-us', [AboutUsController::class, 'index']);
route::resource('contact-us', ContactUsController::class);
