<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Enitities\User;

class LoginController extends Controller
{
  public function index(){
    if(Auth::check()){
      $user = [
        'user' => User::all(),
        'pacientes' => Patient::all(),
        'enfermeiros' => Enfermeiro::all(),
        'secretarias' => Secretaria::all(),
        'medicos' => Doctor::all()
    ];; // Pega todos os dados do usuário na tabela aqui
      
      if(Auth::user()['isAdm']){
        return redirect()->route('admin');
      }elseif ($user->tipo == 'paciente') {
          return redirect()->route('patient.homepage');
      }elseif ($user->tipo == 'secretaria') {
          return redirect()->route('secretaria.homepage');
      }elseif ($user->tipo == 'medico') {
          return redirect()->route('doctor.homepage');
      }
      return view('welcome');
      }
  }

    public function enter(Request $req){
      $info = (object)$req->all();
      if(Auth::attempt(['email'=>$info->email,'password'=>$info->password])){
        if(Auth::user()->isAdm){
          return redirect()->route('user.index');
        }else{
          return redirect()->route('patient.index');
        }
      }
      return redirect()->route('welcome');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('login.index');
    }

    public function changePassword(){
      return view('login.changePassword');
    }

    public function savePassword(Request $req){
      $info = (object)$req->all();
      $user = User::FindOrFail(Auth::user()->id);

      $user->password = bcrypt($info->password);
      $user->email_verified_at = date('Y-m-d H:i:s');
      $user->save();
      return redirect()->route('login.index');
    }

}
