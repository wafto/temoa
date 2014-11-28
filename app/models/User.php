<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * Guarded Attributes
	 *
	 * @var array
	 */
	protected $guarded = ['active', 'partner_id', 'admin_id', 'dependency_admin_id', 'civil_servant_id'];

	public function partner()
    {
        return $this->hasOne('Partner', 'partner_id', 'id');
    }

    public function admin()
    {
        return $this->hasOne('Admin', 'admin_id', 'id');
    }

    public function dependencyAdmin()
    {
        return $this->hasOne('DependencyAdmin', 'dependency_admin_id', 'id');
    }

    public function civilServant()
    {
        return $this->hasOne('CivilServant', 'civil_servant_id', 'id');
    }

    public function interests()
    {
        return $this->hasMany('Interest');
    }

}
