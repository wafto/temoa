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

    public function civilServants()
    {
        return $this->belongsToMany('CivilServant', 'interests', 'category_id', 'civil_servant_id');
    }
}
