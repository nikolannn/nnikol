<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Registration logic here
    }
}