<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',[
        'jobs'=>[
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York'],
            ['title' => 'Data Scientist', 'company' => 'Data Solutions', 'location' => 'San Francisco'],
            ['title' => 'Web Developer', 'company' => 'Web Innovations', 'location' => 'Los Angeles'],
        ]
    ]);
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
