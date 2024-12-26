<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;

/*
|----------------------------------------------------------------------|
| Web Routes                                                          |
|----------------------------------------------------------------------|
*/

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Admin routes
Route::prefix('admin')->group(function () {
    // Admin dashboard route
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    
    // Admin about us edit and update routes
    Route::get('/about/edit', [AboutUsController::class, 'edit'])->name('admin.about.edit');
    Route::post('/about/update', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('admin.about.update');

});

// User routes
Route::prefix('user')->group(function () {
    // User dashboard route
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    // Contact page routes
    Route::get('/contact', [ContactController::class, 'show'])->name('user.contact.show');  // Display the contact form
    Route::post('/contact', [ContactController::class, 'submit'])->name('user.contact.submit');  // Handle form submission

    // About us page
    Route::get('/about', function () {
        return view('user.about.about'); 
    })->name('user.about.about');

    // Courses page route
    Route::get('/courses', function () {
        return view('pages.courses');
    })->name('user.courses');
});

// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
