<?php

namespace App\Http\Controllers;

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
        return view('user.login');
    }

}
