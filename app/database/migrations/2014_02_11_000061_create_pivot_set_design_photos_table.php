<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSetDesignPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setdesign_photos_board', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->increments('id');
			
			$table->integer('setdesign_id')->unsigned()->nullable();
			$table->foreign('setdesign_id')
				->references('id')
				->on('setdesign')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned()->nullable();
			$table->foreign('photo_id')
				->references('id')
				->on('setdesign_photos')
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
		Schema::drop('setdesign_photos_board');
	}

}