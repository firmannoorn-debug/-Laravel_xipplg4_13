<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/', [Landingcontroller::class, 'index'])->name('Landing');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);
});
