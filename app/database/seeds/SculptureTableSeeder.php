<?php

class SculptureTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sculpture')->delete();

		$array = array(
			array(
					'slug' => 'one',
					'name' => 'Sculpture One',
					'photocover_id' => null
			)
		);

		
		DB::table('sculpture')->insert($array);
	}

}

