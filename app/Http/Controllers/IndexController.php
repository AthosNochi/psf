<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('user.login');
    }

    public function Login(){
        echo ("tela de login");
    }

    public function register(){
        return view('auth.register');
    }    
}
