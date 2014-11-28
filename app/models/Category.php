<?php

class Category extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function courses()
    {
        return $this->hasMany('Course');
    }

    public function interests()
    {
        return $this->hasMany('Interest');
    }

}
