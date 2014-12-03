<?php

class Interest extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'interests';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('CivilServant', 'civil_servant_id', 'id');
    }

}
