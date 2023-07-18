<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\logincontroller;
use Illuminate\Support\Facades\Route;



Route::match(['GET','POST'],'/login', [loginController::class, 'login'])->name('login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
});
