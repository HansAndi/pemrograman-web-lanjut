<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/today-special', function () {
    return view('today-special');
});

Route::get('/menu', [menuController::class, 'index']);

// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/contact', function () {
    return view('contact');
});
