<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});
//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});
//create
Route::get('jobs/create', function () {
    return view('jobs.create');
});
//show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});
//store
Route::post('/jobs', function () {
    //dd(request()->title);
    request()->validate([
        'title' => 'required|min:3',
        'company' => 'required',
    ]);
    Job::create([
        'title' => request('title'),
        'company' => request('company'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => 'required|min:3',
        'company' => 'required',
    ]);
    //authorize
    $job = Job::findOrFail($id);
    $job->title = request('title');
    $job->company = request('company');
    //$job->save();
//update the job
    $job->update([
        'title' => request('title'),
        'company' => request('company'),
    ]);

    //and persist it
    //redirect to the job
    return redirect('/jobs/' . $job->id);

});

//destroy
Route::delete('/jobs/{id}', function ($id) {
    //authorize(On hold...)
    //delete the job
    $job = Job::findOrFail($id)->delete();
    //$job->delete();
    //redirect to the jobs index
    return redirect('/jobs');

});

Route::get('/contact', function () {
    return view('contact');
});
