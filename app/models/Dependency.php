<?php

class Dependency extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dependencies';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function civilServants()
    {
        return $this->hasMany('CivilServant');
    }

    public function dependencyAdmins()
    {
        return $this->hasMany('DependencyAdmin');
    }

}
