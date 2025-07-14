<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){
        //validate
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        //dd($attributes);
        //create user
        $user = User::create($attributes);
        //login user
        Auth()->login($user);
        //redirect
        return redirect('/jobs');

    }
}
