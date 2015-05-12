<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
	
		$faker = Faker::create();

		for ($i = 0; $i < 5; $i++)
		{
			$user = User::create(array(
				'username' => $faker->unique()->userName,
				'email' => $faker->unique()->email,
				'password' => $faker->sentence
				));
		}

		$user1 = new User();
		$user1->username = $_ENV['DEFAULT_USERNAME'];
		$user1->email = $_ENV['DEFAULT_EMAIL'];
		$user1->password = $_ENV['DEFAULT_PASSWORD'];
		$user1->save();
	}
}