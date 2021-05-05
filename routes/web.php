<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LaporanController;
use App\Http\Controllers\admin\MasyarakatController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\admin\PetugasController;
use App\Http\Controllers\admin\TanggapanController;
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

// user
Route::get('/', [UserController::class, 'index'])->name('adu.index');
Route::post('/login/auth', [UserController::class, 'login'])->name('adu.login');
Route::get('/register', [UserController::class, 'formRegister'])->name('adu.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('adu.register');
Route::post('/store', [UserController::class, 'storePengaduan'])->name('adu.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('adu.laporan');
Route::get('/logout', [UserController::class, 'logout'])->name('adu.logout');

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'formLogin'])->name('admin.formLogin');
    Route::post('/login',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('pengaduan', PengaduanController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('masyarakat', MasyarakatController::class);
    Route::get('laporan',[LaporanController::class, 'index'])->name('laporan.index');

    Route::post('tanggapan/createOrUpdate',[TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
});