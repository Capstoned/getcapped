<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class PartiesTableSeeder extends Seeder {

	public function run()
	{

		$party = new Party();
		$party->user_id = User::all()->random()->id;
		$party->party_type = 0;
		$party->comments = "Its my sons 10th Birthday";
		$party->event_date = Carbon::now()->addMonth();
		$party->confirm_date;
		$party->event_status = 0;
		$party->address = '2127 Madison Court';
		$party->city = 'Gwynn Oak';
		$party->state = 'MD';
		$party->zip_code = '21207';
		$party->save();
		$party->vendors()->attach(1);
		
		$party2 = new Party();
		$party2->user_id = User::all()->random()->id;
		$party2->party_type = 1;
		$party2->comments = '40 years of marriage!';
		$party2->event_date = Carbon::now()->addDay(24);
		$party2->confirm_date;
		$party2->event_status = 0;
		$party2->address = '1292 Main Street West';
		$party2->city = 'Portage';
		$party2->state = 'IN';
		$party2->zip_code = '46368';
		$party2->save();
		$party2->vendors()->attach(1);
		$party2->vendors()->attach(2);

		$party3 = new Party();
		$party3->user_id = User::all()->random()->id;
		$party3->party_type = 0;
		$party3->comments = "Twins turning 8, so we're throwing a pizza party";
		$party3->event_date = Carbon::now()->addMonth(2);
		$party3->confirm_date;
		$party3->event_status = 0;
		$party3->confirm_date;
		$party3->address = '4114 Creek Road';
		$party3->city = 'Willingboro';
		$party3->state = 'NJ';
		$party3->zip_code = '08046';
		$party3->save();
		$party3->vendors()->attach(2);
		$party3->vendors()->attach(1);

		$party4 = new Party();
		$party4->user_id = User::all()->random()->id;
		$party4->party_type = 3;
		$party4->comments = 'Bar Mitzvah for my son';
		$party4->event_date = Carbon::now()->addDay(44);
		$party4->confirm_date = Carbon::now()->subDay();
		$party4->event_status = 0;
		$party4->address = '965 Main Street East';
		$party4->city = 'Sevierville';
		$party4->state = 'TN';
		$party4->zip_code = '37876';
		$party4->save();
		$party4->vendors()->attach(1);
		$party4->vendors()->attach(3);
		$party4->vendors()->attach(2);

		$party5 = new Party();
		$party5->user_id = User::all()->random()->id;
		$party5->party_type = 2;
		$party5->comments = 'Granny is turning 78!';
		$party5->event_date = Carbon::now()->addDay(10);
		$party5->confirm_date = Carbon::now();
		$party5->event_status = 0;
		$party5->address = '5030 Circle Drive';
		$party5->city = 'Shelbyville';
		$party5->state = 'TN';
		$party5->zip_code = '37160';
		$party5->save();
		$party5->vendors()->attach(2);

	}
}



