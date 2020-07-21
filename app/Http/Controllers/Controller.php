<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {
    	$variavel = "homepage do sistema de PSF";

    	return view('welcome', [
    		'title' => $variavel
    	]);
    }

    public function cadastrar()
    {
    	echo "tela de cadastro";
    }

    public function register(){
        return view('auth.register');
    }  


    
    
    
}
