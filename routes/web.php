<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home route
Route::get('/', function () {
    return view('home');
});

// Authentication routes
Auth::routes();

// Home controller route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Contact routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show'); // Display the contact page
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit'); // Handle contact form submission

// About page route
Route::get('/about', function () {
    return view('about.about'); 
})->name('about');

// Pages route
Route::get('/pages', function () {
    return view('pages.courses'); // Matches folder structure
})->name('pages.courses');
