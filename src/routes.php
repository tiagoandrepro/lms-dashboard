<?php

use \Tiagoandrepro\Lms\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/show', [DashboardController::class, 'show'])->name('show');
});
