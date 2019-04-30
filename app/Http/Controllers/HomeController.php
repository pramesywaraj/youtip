<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Homepage
    public function home()
    {
        return view('home');
    }

    // Register
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
