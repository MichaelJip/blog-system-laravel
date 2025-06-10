<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Michael', 'title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact');
});
