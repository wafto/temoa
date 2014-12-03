<?php namespace Temoa\Command\Contact;

use Laracasts\Validation\FormValidator;

class ReadValidator extends FormValidator {

    /**
     * Validation rules for dependency read
     *
     * @var array
     */
    protected $rules = [
        'id' => 'required|integer',
    ];

}
