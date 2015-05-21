<?php

class Service extends BaseModel {
	protected $fillable = ['description'];


	// Many-to-many model relationship
	public function parties()
	{
		return $this->belongsToMany('Party');
	}




}


