<?php namespace Temoa\Command\Course;

use Laracasts\Validation\FormValidator;

class CreateValidator extends FormValidator {

    /**
     * Validation rules for dependency creation
     *
     * @var array
     */
    protected $rules = [
        'internal_number' => 'required|',
    ];

}
