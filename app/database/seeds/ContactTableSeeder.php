<?php

class ContactTableSeeder extends Seeder {

	public function run()
	{
		DB::table('contact')->delete();

		$array = array(
			array(
					'name' => 'Hansraj Mahawaral',
					'position' => '',
					'telephone' => '',
					'fax' => '',
					'email' => '',
					'address' => '',
					'website' => '',
					'googlemap' => 'https://goo.gl/maps/LFrTJ'
			)
		);

		DB::table('contact')->insert($array);
	}

}