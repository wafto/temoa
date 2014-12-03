<?php

class DependencyAdmin extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dependencies_admins';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function dependency()
    {
        return $this->belongsTo('Dependency', 'dependency_id', 'id');
    }

    public function user()
    {
        return $this->hasOne('User');
    }

}
