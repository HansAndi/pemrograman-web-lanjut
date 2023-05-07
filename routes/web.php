<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "NIM: 2141720082, Nama: Hans Andi Wijaya";
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan ID " . $id;
});
