<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job{
    public static function all(){
        return $jobs= [
            ['id'=>1,'title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York'],
            ['id'=>2,'title' => 'Data Scientist', 'company' => 'Data Solutions', 'location' => 'San Francisco'],
            ['id'=>3,'title' => 'Web Developer', 'company' => 'Web Innovations', 'location' => 'Los Angeles']
    ];
    }
}


Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function ()use ($jobs) {
    return view('jobs',[
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {
    
    /*foreach ($jobs as $job) {
        if ($job['id'] == $id) {
            return view('jobs', ['job' => $job]);
        }
    }*/
    $job=Arr::first($jobs, fn($job)=> $job['id'] == $id);
    //dump($id);
    //dd($job);
    return view('job',['job'=>$job]);
});

Route::get('/contact', function () {
    return view('contact');
});
