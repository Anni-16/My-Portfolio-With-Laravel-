<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about-us');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/my-work-gallery', function () {
    return view('projects');
})->name('my-work-gallary');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blogs-details', function () {
    return view('blogs-details');
})->name('blogs-details');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');
