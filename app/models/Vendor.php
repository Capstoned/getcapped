<?php

class Vendor extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(
		'vendor_name'     => 'required',
     	'email'    => 'required', //|email|unique:vendors,email',
        'username' => 'required', //|unique:vendors,username',
        'password' => 'required', //|min:6',
        'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'serviceCode' => 'required',
    );


	// Don't forget to fill this array
	protected $fillable = ['vendor_name', 'username', 'email', 'password', 'address', 'city', 'state', 'zip_code', 'serviceCode', 'description'];

	protected $table = 'vendors';


	public static $serviceCodes = ['0' => 'balloons', 
						'1' => 'catering', 
						'2' => 'DJ', ];


	public function parties()
	{
		return $this->belongsToMany('Party');
	}

}