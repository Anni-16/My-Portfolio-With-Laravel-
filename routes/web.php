<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/my-work-gallery', function () {
    return view('my-work-gallery');
})->name('my-work-gallary');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
