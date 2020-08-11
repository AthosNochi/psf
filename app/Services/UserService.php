<?php

namespace App\Services;

use Exception;
use Illuminate\Database\QueryException;
use Prettus\Validator\Exceptions\ValidatorExceptions;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class UserService
{
    private $repository;
    private $validator;


    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function store($data)
    {
        try
        {
            $adm = $_POST['adm']; //recebe a informação do html
                if(!strcmp ( $adm , 'on' )){
                    $adm=1;
                }else{
                    $adm=0;
                }

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);

            return [
                'success'   => true,
                'messages'  => "Usuário cadastrado",
                'data'      => $usuario,
            ];
        }

        catch(Exception $e)
        {
            switch(get_class($e))
            {

                case QueryException::class      : return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class  : return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class           : return ['success' => false, 'messages' => $e->getMessage()];
                default                         : return ['success' => false, 'messages' => $e->getMessage()];
            }
        }
    }
    public function update(){}
    
    public function destroy($data)
    {
        try
        {
            $usuario = $this->repository->delete($data);


            return [
                'success'   => true,
                'messages'  => "Usuário removido",
                'data'      => $usuario,
            ];
        }

        catch(Exception $e)
        {
            switch(get_class($e))
            {

                case QueryException::class      : return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class  : return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class           : return ['success' => false, 'messages' => $e->getMessage()];
                default                         : return ['success' => false, 'messages' => $e->getMessage()];
            }
        }
    }
    
}