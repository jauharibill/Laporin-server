<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //
    public function login(){
    	return view("admin.login");
    }
    public function register(){
    	return view("admin.register");
    }
}
