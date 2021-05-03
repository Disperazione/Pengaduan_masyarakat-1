<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('adu.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('adu.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('adu.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('adu.register');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('adu.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('adu.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('adu.logout');