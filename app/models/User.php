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
        return $this->belongsTo('Partner', 'partner_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo('Admin', 'admin_id', 'id');
    }

    public function dependencyAdmin()
    {
        return $this->belongsTo('DependencyAdmin', 'dependency_admin_id', 'id');
    }

    public function civilServant()
    {
        return $this->belongsTo('CivilServant', 'civil_servant_id', 'id');
    }

    public function getReminderEmail()
    {
        return $this->email;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
