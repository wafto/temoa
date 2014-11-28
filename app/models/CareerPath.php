<?php

class CareerPath extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'career_paths';

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

}
