<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends BaseModel implements ConfideUserInterface
{
    use ConfideUser;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['user_type','email', 'password'];

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

	public function userTypes = ['0' => 'User', '1' => 'Vendor'];

	// // Lowercasing usernames for convention
	// public function setUsernameAttribute($value)
 //    {
 //        $this->attributes['username'] = strtolower($value);
 //    }

    // Establishing one-to-many model relationship
    public function parties()
	{
		return $this->hasMany('Party');
	}

	// Validation rules for storing new users
	public static $rules = array(
     	'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6'
    );


}


