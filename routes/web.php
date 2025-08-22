<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/', function () {
    return view('landing.landing_page');
})->name('landing');

require __DIR__.'/auth.php';
