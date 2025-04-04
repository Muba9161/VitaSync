<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {

        $doctors = User::where('role', 'doctor')->get()->unique('id');
        // $doctors = User::all();

        return view('frontend.index', compact('doctors'));
    }

    public function showHeaderData()
    {

        // $doctors = User::where('role', 'doctor')->get()->unique('id');
        $users = User::all();

        return view('layouts.header', compact('users'));
    }
}
