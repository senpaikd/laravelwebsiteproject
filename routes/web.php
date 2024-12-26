<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;  // Ensure you have this controller


Auth::routes(); 


Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/about/edit', [AboutUsController::class, 'edit'])->name('admin.about.edit');
    Route::post('/about/update', [AboutUsController::class, 'update'])->name('admin.about.update');
});


Route::prefix('user')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/contact', [ContactController::class, 'show'])->name('user.contact.show');  
    Route::post('/contact', [ContactController::class, 'submit'])->name('user.contact.submit');  
    Route::get('/about', function () {
        return view('user.about.about'); 
    })->name('user.about.about');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

