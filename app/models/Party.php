<?php

class Party extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static $partyTypes = ['0' => 'childBday', 
						'1' => 'anniversary', 
						'2' => 'adultBday', 
						'3' => 'other'];


	public function vendors()
	{
		return $this->belongsToMany('Vendor');
	}
}