<?php

class NavigationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('navigation')->delete();

		$array = array(
			array(
					'title' => 'Set Design',
					'slug'  => 'setdesign'
			),
			array(
					'title' => 'Contact',
					'slug'  => 'contact'
			),
			array(
					'title' => 'Sculpture',
					'slug'  => 'sculpture'
			)
		);

		
		DB::table('navigation')->insert($array);
	}

}
