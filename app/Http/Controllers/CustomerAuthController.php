<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function register(){
        return view('auth.registration');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function dashboard(){
        return view('layout.dashboard');
    }
    
}
