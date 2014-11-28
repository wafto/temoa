<?php

class DesiredCourse extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'desired_courses';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function civilServant()
    {
        return $this->belongsTo('CivilServant', 'civil_servant_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('Course', 'course_id', 'id');
    }

}
