<?php

class UpdatedSetDesignTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('setdesign')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('setdesign_photos')->count() );
			DB::table('setdesign')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

