<?php

class Service extends BaseModel {
	protected $fillable = ['description'];

	public static $serviceType = ['1' => 'Ballons',
								  '2' => 'DJ',
								  '3' => 'Catering'];
	// Many-to-many model relationship
	public function parties()
	{
		return $this->belongsToMany('Party');
	}




}


