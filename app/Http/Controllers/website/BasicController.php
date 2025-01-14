<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about'); // Updated to reference the correct view
    }

    public function doctor(){
        return view('doctor');
    }

    public function department(){
        return view('department');
    }

    public function contact(){
        return view('contact');
    }
}
