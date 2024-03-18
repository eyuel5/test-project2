<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $about = 'from about route php';
    return view('about', compact('about'));
});

Route::get('contact', function () {
    return view('contact');
});