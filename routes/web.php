<?php

use App\Http\Controllers\homeAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginControllers;

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

Route::get('/admin', function () {
    return view('loginAdmin');
});

Route::get('/calonAdmin', function () {
    return view('calonKetua');
});

Route::get('/pemilihAdmin', function () {
    return view('dataPemilih');
});

Route::get('/tes', function () {
    return view('editDataCalonKetua');
});



Route::get('/register', [userController::class, 'register'])->middleware('guest');

Route::post('/register', [userController::class, 'inputRegister']);

Route::get('/login', [LoginControllers::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [LoginControllers::class, 'authLogin']);

Route::post('/logout', [LoginControllers::class, 'authLogout']);

Route::get('/homeAdmin', [homeAdminController::class, 'index'])->middleware('auth');
