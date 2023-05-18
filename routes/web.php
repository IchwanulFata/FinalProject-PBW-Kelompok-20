<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalonKetuaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisUserController;
use App\Http\Controllers\LoginUserControllers;
use App\Http\Controllers\LoginAdminControllers;
use App\Http\Controllers\dataPemilihController;
use App\Http\Controllers\timeSetterController;
use App\Http\Controllers\informasiAkunController;
use App\Http\Controllers\dataCalonKetuaUserController;

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

Route::get('/register', [RegisUserController::class, 'register'])->middleware('guest');

Route::post('/post-register', [RegisUserController::class, 'inputRegister']);

Route::get('/', [LoginUserControllers::class, 'loginUser'])->name('loginUser')->middleware('guest');

Route::post('/login', [LoginUserControllers::class, 'authLoginUser']);

Route::get('/logout', [LoginUserControllers::class, 'authLogoutUser']);

Route::get('/admin', [LoginAdminControllers::class, 'loginAdmin'])->name('loginAdmin')->middleware('guest');

Route::post('/admin', [LoginAdminControllers::class, 'authLoginAdmin']);

Route::get('/logout-admin', [LoginAdminControllers::class, 'authLogoutAdmin']);

Route::get('/rekapan-pemilihan', [AdminController::class, 'homeAdmin'])->middleware('auth');

Route::get('/calon-ketua-admin', [CalonKetuaController::class, 'index'])->middleware('auth');

Route::get('/create-calon-ketua', [CalonKetuaController::class, 'create'])->middleware('auth');

Route::post('/save-calon-ketua', [CalonKetuaController::class, 'store'])->middleware('auth');

Route::get('/edit-calon-ketua/{id}', [CalonKetuaController::class, 'edit'])->middleware('auth');

Route::post('/update-calon-ketua/{id}', [CalonKetuaController::class, 'update'])->middleware('auth');

Route::post('/delete-calon-ketua/{id}', [CalonKetuaController::class, 'destroy'])->middleware('auth');

Route::get('/data-pemilih', [dataPemilihController::class, 'index'])->middleware('auth');

Route::post('/delete-data-pemilih/{id}', [dataPemilihController::class, 'destroy'])->middleware('auth');

Route::post('/post-time', [timeSetterController::class, 'index'])->middleware('auth');

Route::get('/informasi-akun', [informasiAkunController::class, 'index'])->middleware('auth');

Route::get('/data-calon-ketua-user', [dataCalonKetuaUserController::class, 'index'])->middleware('auth');
