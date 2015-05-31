<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSculpturePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sculpture_photos_board', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';
			
			$table->increments('id');
				
			$table->integer('sculpture_id')->unsigned()->nullable();
			$table->foreign('sculpture_id')
				->references('id')
				->on('sculpture')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned()->nullable();
			$table->foreign('photo_id')
				->references('id')
				->on('sculpture_photos')
				->on_delete('restrict')
				->on_update('cascade');


	        $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sculpture_photos_board');
	}

}