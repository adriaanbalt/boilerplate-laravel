<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSculpturePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sculpture_photos', function(Blueprint $table)
		{
			$table->integer('sculpture_id')->unsigned()->nullable();
			$table->foreign('sculpture_id')
				->references('id')
				->on('sculpture')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
