<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use Illuminate\Support\Facades\Mail;
use App\Models\Job;

Route::get('test',function(){
    $job =Job::first();
    TranslateJob::dispatch();
    return 'done';
});
Route::view('/home', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class)->middleware('auth');

//auth
Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


