<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VendorsTableSeeder extends Seeder {

	public function run()
	{
		$vendor = new Vendor();
		$vendor->vendor_name = "Bob's Balloons";
		$vendor->user_id = '1';
		$vendor->address = '9036 Winding Way';
		$vendor->city = 'Romeoville';
		$vendor->state = 'IL';
		$vendor->zip_code = '60446';
		$vendor->service_id = '1';
		$vendor->description = 'Party ballons, ballon puppets, and more!';
		$vendor->save();

		$vendor2 = new Vendor();
		$vendor2->vendor_name = "DJ Tom";
		$vendor2->user_id = '6';
		$vendor2->address = '5969 4th Street South';
		$vendor2->city = 'Hattiesburg';
		$vendor2->state = 'MS';
		$vendor2->zip_code = '39401';
		$vendor2->service_id = '2';
		$vendor2->description = 'Specializing in Trance, Country, and Funk';
		$vendor2->save();

		$vendor3 = new Vendor();
		$vendor3->vendor_name = "Carly's Catering";
		$vendor3->user_id = '2';
		$vendor3->address = '8501 Harrison Street';
		$vendor3->city = 'Baltimore';
		$vendor3->state = 'MD';
		$vendor3->zip_code = '21206';
		$vendor3->service_id = '3';
		$vendor3->description = "Carly's does BBQ, pasta, and Polynesian cuisine for any occassion.";
		$vendor3->save();
	}

}