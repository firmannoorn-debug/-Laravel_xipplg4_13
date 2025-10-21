<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', [Landingcontroller::class,'index'])->name('Landing');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->name('admin.dashboard');
});
