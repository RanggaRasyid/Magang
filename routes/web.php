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

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/super-admin', [App\Http\Controllers\Auth\SuperAdminController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::prefix('mahasiswa')->group(function () {
    Route::get('/', [App\Http\Controllers\ProfileMahasiswaController::class, 'index'])->name('dashboard.mahasiswa.index');
    Route::prefix('profile')->group(function () {
        Route::get('/{id}', [App\Http\Controllers\ProfileMahasiswaController::class, 'profile'])->name('profile.mahasiswa.index');
        Route::post('/update/{id}', [App\Http\Controllers\ProfileMahasiswaController::class, 'update'])->name('update.mahasiswa');
    });

});

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa.dashboard');
// });
// Route::get('/profile', function () {
//     return view('mahasiswa.profile_mahasiswa');
// });
Route::get('/loogbook', function () {
    return view('mahasiswa.loogbook');
});