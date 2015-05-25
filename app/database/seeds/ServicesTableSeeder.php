<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ServicesTableSeeder extends Seeder {

	public function run()
	{
		$service1 = new Service();
		$service1->description = "Ballons";
		$service1->save();

		$service2 = new Service();
		$service2->description = "DJ";
		$service2->save();

		$service3 = new Service();
		$service3->description = "Catering";
		$service3->save();

	}

}