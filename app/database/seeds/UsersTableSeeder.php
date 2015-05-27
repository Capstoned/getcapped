
<?php
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder {

	public function run()
	{
	
		// Loop for inserting faker data
		$faker = Faker::create();
		for ($i = 0; $i < 5; $i++)
		{
			$password = $faker->sentence;

			$user = User::create(array(
				'user_type' => rand(0,1),
				'email' => $faker->unique()->email,
				'password' => $password,
				'password_confirmation' => $password,
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => 1
				));
		}

		// Create my user for debugging
		$user1 = new User();
		$user1->user_type = 0;
		$user1->email = $_ENV['DEFAULT_EMAIL'];
		$user1->password = $_ENV['DEFAULT_PASSWORD'];
		$user1->password_confirmation = $_ENV['DEFAULT_PASSWORD'];
		$user1->confirmation_code = md5(uniqid(mt_rand(), true));
		$user1->confirmed = 1;
		$user1->save();

		
		
		// Log error data if unable to save user 
		if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }
	}
}

