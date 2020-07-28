<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AgendaValidator.
 *
 * @package namespace App\Validators;
 */
class AgendaValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'description' => 'required|min:5',
            'date' => 'required',
            'patient_id' => 'required',
            'doctor_id' => 'required', 
            'subtitle' => 'required', 
        ],
        
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
