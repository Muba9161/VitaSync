<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/department',function(){
    return view('department');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/login',function(){
    return view('admin.auth.login');
});

Route::get('/register',function(){
    return view('admin.auth.register');
});
Route::get('/dashboard',function(){
    return view('admin.dashboard');
});


Route::post('/login', [AuthController::class, 'login'])->name('submit.login');
