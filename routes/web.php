<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\HomeControler;
 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function (Request $req) {
//     dd($req->all());
    
// });
Route::get('/',[HomeControler::class,'home'])->name('home'); 
Route::get('/registration',[CustomerAuthController::class,'register'])->name('registration');   
Route::get('/login',[CustomerAuthController::class,'login'])->name('login');   
Route::get('/dashboard',[CustomerAuthController::class,'dashboard'])->name('dashboard');
 
