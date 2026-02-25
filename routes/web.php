<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CareerApplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/careers', [UserController::class, 'careers'])->name('careers');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/products', [UserController::class, 'products'])->name('products');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');

Route::get('/offers', [UserController::class, 'offers'])->name('offers');

Route::resource('apply', CareerApplicationController::class);

Route::post('/contact', [UserController::class, 'contactStore'])->name('contact');

// Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');
require __DIR__.'/auth.php';
