<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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
//landing-page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing-page')->middleware('guest');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::prefix('/super-admin')->middleware('can:read.only.superadmin')->group(function () {
    Route::get('/', [App\Http\Controllers\Auth\SuperAdminController::class, 'index'])->name('admin.dashboard');
    
        Route::prefix('/master-mahasiswa')->group(function () {
            Route::get('/', [App\Http\Controllers\MasterMahasiswaiController::class, 'index'])->name('master.index');
            Route::get('/show', [App\Http\Controllers\MasterMahasiswaiController::class, 'show'])->name('master.show');
            Route::post('/status/{id}', [App\Http\Controllers\MasterMahasiswaiController::class, 'status'])->name('master.status');
            // Route::get('/edit/{id}', [App\Http\Controllers\MasterMahasiswaiController::class, 'edit'])->name('master.edit');
            // Route::post('/update/{id}', [App\Http\Controllers\MasterMahasiswaiController::class, 'update'])->name('master.update');
            // Route::post('/store/{id}', [App\Http\Controllers\MasterMahasiswaiController::class, 'store'])->name('master.store');

        });
        Route::prefix('/presensi')->group(function () {
            Route::get('/', [App\Http\Controllers\MasterPresensiController::class, 'index'])->name('master.presensi.index');
            Route::post('/show/{id}', [App\Http\Controllers\MasterPresensiController::class, 'show'])->name('master.presensi.show');
        });
    });
});

Route::prefix('mahasiswa')->middleware('auth', 'can:read.only.mahasiswa')->group(function () {
    Route::get('/', [App\Http\Controllers\ProfileMahasiswaController::class, 'index'])->name('dashboard.mahasiswa.index');
    
    Route::prefix('/profile')->group(function () {
        Route::get('/{id}', [App\Http\Controllers\ProfileMahasiswaController::class, 'profile'])->name('profile.mahasiswa.index');
        Route::post('/update/{id}', [App\Http\Controllers\ProfileMahasiswaController::class, 'update'])->name('update.mahasiswa');
    });

    Route::prefix('/loogbook')->group(function() {
        route::get('/{id}', [App\Http\Controllers\LoogBookController::class, 'index'])->name('loogbook');
    });

    Route::prefix('/presensi')->group(function() {
        route::get('/{id}', [App\Http\Controllers\PresensiController::class, 'index'])->name('presensi');
    });

});

