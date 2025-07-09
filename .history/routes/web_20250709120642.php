<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',[
        'greeting'=>'Hello',
        'name'=>'Menna'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
