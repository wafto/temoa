<?php

class Admin extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admins';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        return $this->hasOne('User');
    }

}
