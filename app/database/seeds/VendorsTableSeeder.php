<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VendorsTableSeeder extends Seeder {

	public function run()
	{
		$vendor = new Vendor();
		$vendor->vendor_name = "Bob's Balloons";
		$vendor->username = 'vendor1';
		$vendor->email = 'vendor1@email.com';
		$vendor->password = 'password';
		$vendor->address = '9036 Winding Way';
		$vendor->city = 'Romeoville';
		$vendor->state = 'IL';
		$vendor->zip_code = '60446';
		$vendor->serviceCode = '0';
		$vendor->description = 'Party ballons, ballon puppets, and more!';
		$vendor->save();

		$vendor2 = new Vendor();
		$vendor2->vendor_name = "DJ Tom";
		$vendor2->username = 'vendor2';
		$vendor2->email = 'vendor2@email.com';
		$vendor2->password = 'password';
		$vendor2->address = '5969 4th Street South';
		$vendor2->city = 'Hattiesburg';
		$vendor2->state = 'MS';
		$vendor2->zip_code = '39401';
		$vendor2->serviceCode = '2';
		$vendor2->description = 'Specializing in Trance, Country, and Funk';
		$vendor2->save();

		$vendor3 = new Vendor();
		$vendor3->vendor_name = "Carly's Catering";
		$vendor3->username = 'vendor3';
		$vendor3->email = 'vendor3@email.com';
		$vendor3->password = 'password';
		$vendor3->address = '8501 Harrison Street';
		$vendor3->city = 'Baltimore';
		$vendor3->state = 'MD';
		$vendor3->zip_code = '21206';
		$vendor3->serviceCode = '1';
		$vendor3->description = "Carly's does BBQ, pasta, and Polynesian cuisine for any occassion.";
		$vendor3->save();
	}

}