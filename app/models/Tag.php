<?php

class Tag extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function courses()
    {
        return $this->belongsToMany('Course', 'courses_tags');
    }
}
