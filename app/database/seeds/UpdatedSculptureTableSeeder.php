<?php

class UpdatedSculptureTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('sculpture')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('sculpture_photos')->count() );
			DB::table('sculpture')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

