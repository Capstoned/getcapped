<?php

class Service extends \Eloquent {
	protected $fillable = ['description'];


	// Many-to-many model relationship
	public function parties()
	{
		return $this->belongsToMany('Party');
	}




}


