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

	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	*Save hashed password
	*
	*@return hashed string
	*/

	// Hashing passwords
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	// Lowercasing usernames for convention
	public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    // Establishing one-to-many model relationship
    public function parties()
	{
		return $this->belongsToMany('Party');
	}

	// Validation rules for storing new users
	public static $rules = array(
     	'email'    => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required|min:6'
    );


}


