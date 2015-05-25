<?php

class Vendor extends BaseModel {

		protected $table = 'vendors';


	// Add your validation rules here
	public static $rules = array(
		'user_id' => 'required',
		'vendor_name'	=> 'required',
        'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'service_id' => 'required',
    );


	// Don't forget to fill this array

	protected $fillable = ['user_id','vendor_name', 'address','city', 
						'state', 'zip_code', 'service_id', 'description'];



 	// Array of codes for types of vendor services
	public static $serviceCodes = ['1' => 'Balloons', 
						'2' => 'Catering', 
						'3' => 'DJ', ];

}