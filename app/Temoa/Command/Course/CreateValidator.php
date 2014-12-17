<?php namespace Temoa\Command\Course;

use Laracasts\Validation\FormValidator;

class CreateValidator extends FormValidator {

    /**
     * Validation rules for dependency creation
     *
     * @var array
     */
    protected $rules = [
        'internal_number' => 'required|min:6|alpha_num|unique:courses,internal_number',
        'external_number' => 'required|min:6|alpha_num|unique:courses,external_number',
        'name' => 'required|min:6',
        'category' => 'required|exists:categories,name',
        'partner_id' => 'required|exists:partners,id',
        'duration' => 'required|numeric',
        'format' => 'required|in:presencial,línea',
        'start_at' => 'required|date',
    ];
}
