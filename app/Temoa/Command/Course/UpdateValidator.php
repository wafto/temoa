<?php namespace Temoa\Command\Course;

use Laracasts\Validation\FormValidator;

class UpdateValidator extends FormValidator {

    /**
     * Validation rules for dependency creation
     *
     * @var array
     */
    protected $rules = [
        'internal_number' => 'required|min:6|alpha_num',
        'external_number' => 'required|min:6|alpha_num',
        'name' => 'required|min:6',
        'category' => 'required|exists:categories,name',
        'partner_id' => 'required|exists:partners,id',
        'duration' => 'required|numeric',
        'format' => 'required|in:presencial,línea',
        'start_at' => 'required|date',
    ];
}
