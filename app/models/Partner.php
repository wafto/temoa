<?php

use Temoa\Transformer\TransformerInterface;
use Temoa\Transformer\PartnerTransformerTrait;

class Partner extends Eloquent implements TransformerInterface {

    use PartnerTransformerTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

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

    public function user()
    {
        return $this->hasOne('User');
    }

}
