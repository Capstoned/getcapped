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

	// Search for the emails of Vendors of a given Service
	public static function getServiceVendorEmails($service)
	{
		$vendors = Vendor::where('service_id', $service)->get();

		$vendorEmails = [];
		foreach ($vendors as $vendor)
		{
			$user = User::find($vendor->user_id);
			$vendorEmails[] = $user->email;
			// var_dump($vendor->user_id)
			// dd($vendor);
			//$vendorUserIds = $vendor->user_id;
			// dd($vendorUserIds->first());
		}

		return $vendorEmails;
		// foreach ($vendorUserIds as $id)
		// 	$userEmail = User->getUserEmailById();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}