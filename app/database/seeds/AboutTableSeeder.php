<?php

class AboutTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('about')->delete();

		$array = array(
			array(
					'title' => '',
					'paragraph' => "Located in the historic Brooklyn Navy Yard, Studio Hansraj specializes in set and production design.  Having had experience in architecture, fabrication and consulting we are uniquely positioned to manage and solve problems in a timely and cost effective fashion."
			),
			array(
					'title' => '',
					'paragraph' => "For more information, to reach out regarding employment opportunities, or just to say hello, feel free to get in touch."
			)
		);

		
		DB::table('about')->insert($array);
	}

}

