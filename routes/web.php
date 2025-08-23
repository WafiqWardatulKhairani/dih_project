<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemerintahController;

// ✅ Landing Page
Route::get('/', function () {
    return view('landing.landing_page');
})->name('landing');

// ✅ Dashboard (harus pakai middleware auth biar test lulus)
Route::get('/dashboard', function () {
    return view('dashboard'); // pastikan file resources/views/dashboard.blade.php ada
})->middleware(['auth'])->name('dashboard');

// ✅ Settings
Route::middleware(['auth'])->group(function () {
    Route::view('/settings/profile', 'settings.profile')->name('settings.profile');
    Route::view('/settings/password', 'settings.password')->name('settings.password');
    Route::get('/settings/appearance', function () {
        return 'Appearance Settings Page';
    })->name('settings.appearance');
});

// ✅ Pemerintah routes
Route::prefix('pemerintah')->group(function () {
    Route::get('/', [PemerintahController::class, 'index'])->name('pemerintah.index');
    Route::get('/program-list', [PemerintahController::class, 'programList'])->name('pemerintah.program.list');
    Route::post('/program', [PemerintahController::class, 'storeProgram'])->name('pemerintah.program.store');
    Route::post('/solusi', [PemerintahController::class, 'storeSolution'])->name('pemerintah.solution.store');
});

// ✅ Auth routes (login, register, forgot-password, reset-password, dll)
require __DIR__.'/auth.php';

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
Route::view('/reset-password/{token}', 'auth.reset-password')->name('password.reset');
Route::view('/confirm-password', 'auth.confirm-password')->name('password.confirm');
Route::view('/verify-email', 'auth.verify-email')->name('verification.notice');

