<?php

use App\Http\Controllers\admin\AppointmentsController;
use App\Http\Controllers\frontend\AppointmentController;
use App\Http\Controllers\frontend\BasicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [BasicController::class, 'home'])
    ->middleware(middleware: ['auth', 'verified'])
    ->name('frontend.index');

// Route::get('/', [BasicController::class, 'showHeaderData']);


Route::get('/', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/home', function () {
//     return view('frontend.index');
// })->middleware(['auth', 'verified'])->name('frontend.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/home/{id}',[AppointmentController::class, 'store'])->name('appoint.store');
    Route::get('/appointment',[AppointmentsController::class, 'index'])->name('appoint.index');
    // Route::get('/dashboard/nothing', [BasicController::class, 'dashboard'])->name('dashboard');
});

require __DIR__ . '/auth.php';
