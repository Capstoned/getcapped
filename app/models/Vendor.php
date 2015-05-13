<?php

class Vendor extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(
     	'email'    => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required|min:6',
        'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'event_date' => 'required',
    );


	// Don't forget to fill this array
	protected $fillable = [];

	protected $table = 'vendors';


	public function parties()
	{
		return $this->belongsToMany('Party');
	}

}