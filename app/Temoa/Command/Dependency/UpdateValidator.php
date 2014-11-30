<?php namespace Temoa\Command\Dependency;

use Laracasts\Validation\FormValidator;

class UpdateValidator extends FormValidator {

    /**
     * Validation rules for dependency edition
     *
     * @var array
     */
    protected $rules = [
        'id' => 'required|integer',
        'name' => 'required',
        'responsable' => 'required',
    ];

}
