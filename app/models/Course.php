<?php

use Temoa\Transformer\TransformerInterface;
use Temoa\Transformer\CourseTransformerTrait;

class Course extends Eloquent implements TransformerInterface {

    use CourseTransformerTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo('Partner', 'partner_id', 'id');
    }

    public function desiredCourses()
    {
        return $this->hasMany('DesiredCourse');
    }

    public function recommendedCourses()
    {
        return $this->hasMany('RecommendedCourse');
    }

    public function takenCourses()
    {
        return $this->hasMany('TakenCourse');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag', 'courses_tags');
    }
}
