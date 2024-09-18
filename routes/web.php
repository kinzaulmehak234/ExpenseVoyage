<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< Updated upstream
Route::get('/about', function () {
    return view('ExpenseVoyage.about');
});
Route::get('/blog', function () {
    return view('ExpenseVoyage.blog');
});
Route::get('/booking', function () {
    return view('ExpenseVoyage.booking');
});
Route::get('/contact', function () {
    return view('ExpenseVoyage.contact');
});
Route::get('/destination', function () {
    return view('ExpenseVoyage.destination');
});
Route::get('/gallery', function () {
    return view('ExpenseVoyage.gallery');
});
Route::get('/testimonial', function () {
    return view('ExpenseVoyage.testimonial');
});
Route::get('/guides', function () {
    return view('ExpenseVoyage.guides');
});
Route::get('/package', function () {
    return view('ExpenseVoyage.package');
});
Route::get('/service', function () {
    return view('ExpenseVoyage.service');
});
Route::get('/tour', function () {
    return view('ExpenseVoyage.tour');
});


=======
>>>>>>> Stashed changes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
