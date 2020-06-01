<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'cpf'   => 'required', 
            'name'  => 'required', 
            'phone' => 'required',
            'rg'    => 'required',
            'email' => 'required|unique:user,email',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
