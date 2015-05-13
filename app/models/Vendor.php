<?php

class Vendor extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(
     	'email'    => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required|min:6'
    );


	// Don't forget to fill this array
	protected $fillable = [];



	public function parties()
	{
		return $this->belongsToMany('Party');
	}

}