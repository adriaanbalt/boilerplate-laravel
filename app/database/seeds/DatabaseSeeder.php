<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('HERE WE GO!');

		$this->call('NavigationTableSeeder');
		$this->command->info('Navigation finished!');

		$this->call('AboutTableSeeder');
		$this->command->info('About finished!');

		$this->call('ContactTableSeeder');
		$this->command->info('Contact finished!');

		// $this->call('SculptureTableSeeder');
		// $this->command->info('Sculpture finished!');

		$this->call('SetDesignTableSeeder');
		$this->command->info('SetDesign finished!');

		// $this->call('SculpturePhotosTableSeeder');
		// $this->command->info('Sculpture Photos finished!');

		$this->call('SetDesignPhotosTableSeeder');
		$this->command->info('SetDesign Photos finished!');

		// $this->call('UpdatedSculptureTableSeeder');
		// $this->command->info('Updated Sculpture!');

		// $this->call('UpdatedSetDesignTableSeeder');
		// $this->command->info('Updated SetDesign!');
		
		// $this->call('PivotSculpturePhotosBoardTableSeeder');
		// $this->command->info('Pivot Sculpture Photos Board finished!');

		$this->call('PivotSetDesignPhotosBoardTableSeeder');
		$this->command->info('Pivot SetDesign Photos finished!');

	}

}