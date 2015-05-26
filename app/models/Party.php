<?php

use Carbon\Carbon;

class Party extends BaseModel {


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
	protected $fillable = ['party_type', 'user_id', 'address', 'city', 
							'state', 'zip_code', 'event_date', 'service_id', 'comments', 'confirm_date'];


	// Array of codes for various party types
	public static $partyTypes = ['0' => "Child's Birthday",
						'1' => "Anniversary",
						'2' => "Adult's Birthday",
						'3' => "Other"];



	// Many to many model relationships
	public function services()
	{
		return $this->belongsToMany('Service');
	}
	
	public function getDates()
	{
	    return array('created_at', 'updated_at', 'event_date');
	}

	public function getEventDate($value)
	{

    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago')->toFormattedDateString();
	}
}