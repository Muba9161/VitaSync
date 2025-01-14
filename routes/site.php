<?php

use App\Http\Controllers\website\BasicController;
use Illuminate\Support\Facades\Route;


// Route::get('/home',[BasicController::class,'home'])->name('site.home');
Route::get('/welcome',[BasicController::class, 'welcome'])->name('welcome');
Route::get('/about',[BasicController::class, 'about'])->name('about');


// Route::get('/about', [BasicController::class, 'about']);
