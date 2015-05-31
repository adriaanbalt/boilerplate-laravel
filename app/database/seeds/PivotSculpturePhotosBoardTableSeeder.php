<?php

class PivotSculpturePhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sculpture_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '1',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '2',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '3',
					'sculpture_id' => '3'
			),
			array(
					'photo_id' => '4',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '5',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '6',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '7',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '8',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '9',
					'sculpture_id' => '3'
			),
			array(
					'photo_id' => '12',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '13',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '14',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '15',
					'sculpture_id' => '3'
			),
			array(
					'photo_id' => '16',
					'sculpture_id' => '3'
			),
			array(
					'photo_id' => '17',
					'sculpture_id' => '2'
			),
			array(
					'photo_id' => '18',
					'sculpture_id' => '1'
			),
			array(
					'photo_id' => '19',
					'sculpture_id' => '3'
			),
			array(
					'photo_id' => '20',
					'sculpture_id' => '1'
			)
		);

		
		DB::table('sculpture_photos_board')->insert($array);
	}

}


/*
	$table->foreign('sculpture_id')
		->references('id')
		->on('sculpture')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('photo_id')
		->references('id')
		->on('photos')
		->on_delete('restrict')
		->on_update('cascade');
*/