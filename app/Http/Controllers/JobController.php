<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);

    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request)
    {
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
    }

    public function edit(job $job)
    {
        /*if (Auth::user()->cannot('edit-job', $job)) {
            dd('You are not allowed to edit this job');
        }*/

        Gate::authorize('edit-job', $job);
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(job $job)
    {
        Gate::authorize('edit-job', $job);

        request()->validate([
            'title' => 'required|min:3',
            'company' => 'required',
        ]);

        $job->update([
            'title' => request('title'),
            'company' => request('company'),
        ]);

        return redirect('/jobs/' . $job->id);

    }

    public function destroy(job $job)
    {
        Gate::authorize('edit-job', $job);

        $job->delete();
        return redirect('/jobs');
    }


}
