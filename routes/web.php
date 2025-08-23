<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemerintahController;
use Livewire\Volt\Volt;


// Dummy routes for tests
Route::view('/login', 'welcome')->name('login');
Route::view('/register', 'welcome')->name('register');
Route::view('/forgot-password', 'welcome')->name('password.request');
Route::view('/reset-password/{token}', 'welcome')->name('password.reset');
Route::view('/confirm-password', 'welcome')->name('password.confirm');
Route::view('/verify-email', 'welcome')->name('verification.notice');

Route::view('/dashboard', 'welcome')->name('dashboard');

Route::view('/settings/profile', 'welcome')->name('settings.profile');
Route::view('/settings/password', 'welcome')->name('settings.password');
Route::get('/settings/appearance', function () {
    return 'Appearance Settings Page';
})->name('settings.appearance');








Route::get('/', function () {
    return view('landing.landing_page');
})->name('landing');

// Route untuk halaman pemerintah
Route::prefix('pemerintah')->group(function () {
    Route::get('/', [PemerintahController::class, 'index'])->name('pemerintah.index');
    Route::get('/program-list', [PemerintahController::class, 'programList'])->name('pemerintah.program.list');
    Route::post('/program', [PemerintahController::class, 'storeProgram'])->name('pemerintah.program.store');
    Route::post('/solusi', [PemerintahController::class, 'storeSolution'])->name('pemerintah.solution.store');
});


require __DIR__.'/auth.php';
