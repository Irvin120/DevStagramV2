<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->get('password'));
        // return true;

        $request->validate(
            [
                'name'     => ['required', 'min:25'],
                'username' => ['required', 'min:5', 'unique:users', 'min:3', 'max:20'],
                'email'    => ['required', 'unique:users,email,max:60'],
                'password' => ['required', 'confirmed', 'min:5'],
            ]
        );

        // dd($request->get('name'));
    }
}
