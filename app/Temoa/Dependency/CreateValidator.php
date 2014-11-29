<?php namespace Temoa\Dependency;

use Laracasts\Validation\FormValidator;

class CreateValidator extends FormValidator {

    /**
     * Validation rules for dependency creation
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'responsable' => 'required',
    ];

}