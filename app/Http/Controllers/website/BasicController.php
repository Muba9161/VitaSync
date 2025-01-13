<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    //

    public function home(){
        return view('website.home');
    }
}
