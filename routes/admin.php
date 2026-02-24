<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::post("/do-login", [LoginController::class,'doLogin'])->name('do.login');
    
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
        Route::resource('aboutus', AboutUsController::class);
        Route::resource('teams', TeamController::class);
        Route::resource('products', ProductController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('careers', CareerController::class);
        Route::resource('offers', OfferController::class);
        Route::resource('reviews', ReviewController::class);
        });
});