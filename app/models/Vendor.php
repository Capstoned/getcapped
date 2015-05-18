<?php

class Vendor extends \Eloquent {

		protected $table = 'vendors';


	// Add your validation rules here
	public static $rules = array(
		'vendor_name'	=> 'required',
		'user_id'     => 'required',
        'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'serviceCode' => 'required',
    );


	// Don't forget to fill this array

	protected $fillable = ['user_id','vendor_name', 'address','city', 
						'state', 'zip_code', 'serviceCode', 'description'];



 	// Array of codes for types of vendor services
	public static $serviceCodes = ['0' => 'balloons', 
						'1' => 'catering', 
						'2' => 'DJ', ];

	// Many-to-many model relationship
	public function parties()
	{
		return $this->belongsToMany('Party');
	}

}