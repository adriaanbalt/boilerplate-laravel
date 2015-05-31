<?php

class PivotSetDesignPhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('setdesign_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '1',
					'setdesign_id' => '1'
			),
			array(
					'photo_id' => '4',
					'setdesign_id' => '2'
			),
			array(
					'photo_id' => '3',
					'setdesign_id' => '3'
			),
			array(
					'photo_id' => '4',
					'setdesign_id' => '4'
			),
			array(
					'photo_id' => '5',
					'setdesign_id' => '5'
			),
			array(
					'photo_id' => '6',
					'setdesign_id' => '6'
			),
			array(
					'photo_id' => '7',
					'setdesign_id' => '7'
			),
			array(
					'photo_id' => '8',
					'setdesign_id' => '8'
			),
			array(
					'photo_id' => '9',
					'setdesign_id' => '9'
			),
			array(
					'photo_id' => '12',
					'setdesign_id' => '10'
			),
			array(
					'photo_id' => '13',
					'setdesign_id' => '11'
			),
			array(
					'photo_id' => '14',
					'setdesign_id' => '12'
			),
			array(
					'photo_id' => '15',
					'setdesign_id' => '13'
			),
			array(
					'photo_id' => '16',
					'setdesign_id' => '14'
			),
			array(
					'photo_id' => '17',
					'setdesign_id' => '15'
			)
		);

		
		DB::table('setdesign_photos_board')->insert($array);
	}

}

