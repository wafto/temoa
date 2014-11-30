<?php

use Temoa\Utility\PaginateTrait;
use Temoa\Utility\SortedByTrait;

class Dependency extends Eloquent {

    use PaginateTrait, SortedByTrait;

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
