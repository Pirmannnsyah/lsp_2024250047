<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AccountVerificationController;
use App\Http\Controllers\VerifikasiakunController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/mahasiswa/dashboard', function () {
        return view('mahasiswa.dashboard');
    })->name('mahasiswa.dashboard');
    Route::get('/admin/verifikasi_pendaftaran', function () {
        return view('admin.verifikasi_pendaftaran');
    })->name('admin.verifikasi_pendaftaran');
    Route::get('/admin/verifikasi_akun', [VerifikasiakunController::class, 'index'])->name('admin.verifikasi_akun');
    Route::patch('/admin/verifikasi_akun/{id}/admin', [VerifikasiakunController::class, 'validationAdmin'])->name('user.validate_admin');
});



Route::get('/user/create', [RegisteredUserController::class, 'create'])->name('user.create');
Route::post('/user', [RegisteredUserController::class, 'store'])->name('user.store');

require __DIR__.'/auth.php';
