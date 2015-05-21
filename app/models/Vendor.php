<?php

class Vendor extends BaseModel {

		protected $table = 'vendors';


	// Add your validation rules here
	public static $rules = array(
		'vendor_name'	=> 'required',
        'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'service_code' => 'required',
    );


	// Don't forget to fill this array

	protected $fillable = ['user_id','vendor_name', 'address','city', 
						'state', 'zip_code', 'service_code', 'description'];



 	// Array of codes for types of vendor services
	public static $serviceCodes = ['0' => 'Balloons', 
						'1' => 'Catering', 
						'2' => 'DJ', ];

	// Many-to-many model relationship
	public function parties()
	{
		return $this->belongsToMany('Party');
	}

}