<?php

class Party extends \Eloquent {


	protected $table = 'parties';



	// Add your validation rules here
	public static $rules = [
		'party_type' => 'required',
		'user_id' => 'required',
		'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'event_date' => 'required',
		'service_id' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	
	// Array of codes for various party types
	public static $partyTypes = ['0' => 'childBday', 
						'1' => 'anniversary', 
						'2' => 'adultBday', 
						'3' => 'other'];



	
	// Many to many model relationship				
	public function vendors()
	{
		return $this->belongsToMany('Vendor');
	}

	public function services()
	{
		return $this->belongsToMany('Service');
	}
	
	public function getDates()
	{
	    return array('created_at', 'updated_at', 'event_date');
	}
}