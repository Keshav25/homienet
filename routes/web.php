<?php

use App\Http\Controllers\RevelationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('revelations', [RevelationController::class, 'index'])
	->middleware(['auth', 'verified'])
	->name('revelations');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
