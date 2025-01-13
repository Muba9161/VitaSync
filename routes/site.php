<?php

use App\Http\Controllers\website\BasicController;
use Illuminate\Support\Facades\Route;


Route::post('/home',[BasicController::class,'home'])->name('home');
