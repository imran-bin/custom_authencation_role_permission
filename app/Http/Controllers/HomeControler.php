<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function home(){
        return view('layout.home');
    }
    public function register(){
        return view('layout.registration');
    }
    public function login()
    {
        return view('layout.login');
    }
}
