<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function loginView(){
        return view('admin.auth.login');
    }

    public function registerView(){
        return view('admin.auth.register');
    }
}
