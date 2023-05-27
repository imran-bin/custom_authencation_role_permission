<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginVaidation;
use App\Http\Requests\RegisterValidation;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function customLogin(LoginVaidation $req)           
    {
        //    $validation= $req->validated();
        $req->validated();
        
        $credential=$req->only('email','password');
        if(Auth::attempt($credential)){
            return redirect()->intended('/')->withSuccess("Sign in");
        }
        return redirect('login')->withSuccess('Log in details are not valid');
         
    }   
    public function customRegister(RegisterValidation $req){
        $data = $req->all();
       
        $this->create($data);
        return redirect('/')->withSuccess('You have sign in');

    }
    public function create( array $data)
    {
        return User::create([
            "first_name" => $data['name'],
            "email" => $data['email'],
            "password" => Hash::make($data['password']),
        ]);
    }
    public function logout(Request $request )
    {
        $request->session()->flush() ;
        Auth::logout();
        return redirect('login');
    }
}
