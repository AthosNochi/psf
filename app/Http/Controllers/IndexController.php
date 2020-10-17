<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function homepageSecretaria(){
        return view ('secretaria.homepage');
    }

    public function homepageEnfermeiro(){
        return view ('enfermeiro.homepage');
    }

    public function homepageMedico(){
        return view ('doctor.homepage');
    }

    public function homepagePaciente(){
        return view ('patient.homepage');
    }

    public function Login(){
        return view ('auth.login');
    }

    public function register(){
        return view('auth.register');
    }    
}
