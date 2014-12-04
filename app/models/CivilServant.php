<?php

class CivilServant extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'civil_servants';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function interesedCategories()
    {
        return $this->belongsToMany('Category', 'interests', 'civil_servant_id', 'category_id');
    }

    public function academicTrainings()
    {
        return $this->hasMany('AcademicTraining');
    }

    public function careerPaths()
    {
        return $this->hasMany('CareerPath');
    }

    public function dependency()
    {
        return $this->belongsTo('Dependency', 'dependency_id', 'id');
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

    public function user()
    {
        return $this->hasOne('User');
    }

}
