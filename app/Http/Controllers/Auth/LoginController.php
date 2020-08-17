<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Http\Controllers\Controller;

class LoginController extends Controller{
    private $repository;
	private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    public function index(){
    	return view('user.index');    
    }

    public function login(Request $request){
    	
    	$data = [
    		'email' => $request->get('username'),
    		'password' => $request->get('password')
    	];

    	try
    	{
            if(env('PASSWORD_HASH'))
            {
                var_dump ($data);
                \Auth::attempt($data, false);
            }

    		else
            {
               $user = $this->repository->findWhere(['email' => $request->get('username')])->first();


                if(!$user)
                    throw new \Exception("O email informado é invalido");


               if($user->password == $request->get('password'))
                throw new \Exception("A senha informada é invalida");

                \Auth::login($user);
            }

    		return redirect()->route('user.index');
    	}
		catch (\Exception $e)
    	{
    		return $e->getMessage();
    	}

    	dd($request->all());
    	
    }
}