<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSculptureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sculpture', function(Blueprint $table) {
			$table->engine ='InnoDB';

			$table->increments('id');
			
			$table->string('slug');

			$table->string('name');

			$table->string('height')->nullable();
			$table->string('bust')->nullable();
			$table->string('waist')->nullable();
			$table->string('hips')->nullable();
			$table->string('shoes')->nullable();
			$table->string('hair')->nullable();
			$table->string('eyes')->nullable();

			$table->integer('photocover_id')->unsigned()->nullable();
			$table->foreign('photocover_id')
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
		Schema::drop('sculpture');
	}

}
