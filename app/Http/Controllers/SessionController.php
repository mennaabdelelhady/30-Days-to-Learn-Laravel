<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //dd(request()->all());
        //validate
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if(!Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        //regenerate session token
        request()->session()->regenerate();

        //redirect
        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        //dd('Logged out');
        return redirect('/home');
    }
}
