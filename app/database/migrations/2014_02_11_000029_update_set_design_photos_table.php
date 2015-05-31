<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSetDesignPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('setdesign_photos', function(Blueprint $table)
		{
			$table->integer('setdesign_id')->unsigned()->nullable();
			$table->foreign('setdesign_id')
				->references('id')
				->on('setdesign')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
