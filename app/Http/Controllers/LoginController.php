<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Entities\User;

class LoginController extends Controller
{

    /**
    ------------------------------------------------------------------------
    method to user login VIEW
    ------------------------------------------------------------------------
    **/

    public function fazerLogin()
    {
            if(\Auth::check()){
              if(\Auth::user()['isAdm']){
                return redirect()->route('user.index');
              }
              return redirect()->route('userN.index');
            }
        return view('home');
    }

    public function enter(Request $req){
      $info = (object)$req->all();
      if(Auth::attempt(['email'=>$info->email,'password'=>$info->password])){
        if(Auth::user()->isAdm){
          return redirect()->route('user.index');
        }else{
          return redirect()->route('userN.index');
        }
      }
      return redirect()->route('login.index');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('login.index');
    }

}
