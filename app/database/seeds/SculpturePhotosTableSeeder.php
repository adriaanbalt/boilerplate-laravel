<?php

class SculpturePhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sculpture_photos')->delete();

		$array = array(
			array(
					'title' => '',
					'slug' => '',
					'path' => '',
					'sculpture_id' => '1'
			)
		);

		
		DB::table('sculpture_photos')->insert($array);
	}

}

