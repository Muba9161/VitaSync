<?php

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
