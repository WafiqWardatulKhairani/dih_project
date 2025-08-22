<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemerintahController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/', function () {
    return view('landing.landing_page');
})->name('landing');

// Route untuk halaman pemerintah
Route::prefix('pemerintah')->group(function () {
    Route::get('/', [PemerintahController::class, 'index'])->name('pemerintah.index');
    Route::post('/program', [PemerintahController::class, 'storeProgram'])->name('pemerintah.program.store');
    Route::post('/solusi', [PemerintahController::class, 'storeSolution'])->name('pemerintah.solution.store');
});



require __DIR__.'/auth.php';
