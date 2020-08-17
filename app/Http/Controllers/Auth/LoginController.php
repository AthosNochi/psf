<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Entities\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index(){
    	return view('user.index');    
    }

    public function login(Request $request){
        
        if($data = ['email' => $request->get('username'),'password' => $request->get('password')]){
          if(Auth::user()->isAdm){
            return redirect()->route('user.index');
          }else{
            return redirect()->route('userN.index');
          }
        }
        return redirect()->route('login.index');
    	
    }
}
