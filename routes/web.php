<?php

use App\Http\Controllers\languageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [WelcomeController::class, 'index'])->name('example');

Route::get('/lang/{lang}', [languageController::class, 'switchlang'])->name('lang');
