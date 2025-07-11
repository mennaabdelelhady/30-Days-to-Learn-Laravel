<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});
//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});
//create
Route::get('jobs/create',function () {
    return view('jobs.create');
});
//show
Route::get('/jobs/{id}', function ($id)  {
    $job =Job::find($id);

    return view('jobs.show',['job'=>$job]);
});
//store
Route::post('/jobs', function(){
    //dd(request()->title);
    request()->validate([
        'title' => 'required|min:3',
        'company' => 'required',
    ]);
    Job::create([
        'title' =>request('title'),
        'company'=>request('company'),
        'employer_id'=>1
    ]);
    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id)  {
    $job =Job::find($id);

    return view('jobs.edit',['job'=>$job]);
});

Route::get('/contact', function () {
    return view('contact');
});
