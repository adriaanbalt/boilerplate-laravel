<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSetDesignTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setdesign', function(Blueprint $table) {
			$table->engine ='InnoDB';

			$table->increments('id');
			
			$table->string('slug');

			$table->string('name');

			$table->string('client')->nullable();
			$table->string('client_url')->nullable();

			$table->string('director')->nullable();
			$table->string('director_url')->nullable();

			$table->string('photographer')->nullable();
			$table->string('photographer_url')->nullable();

			$table->string('stylist')->nullable();
			$table->string('stylist_url')->nullable();
			
			$table->string('talent')->nullable();
			$table->string('talent_agency')->nullable();
			$table->string('talent_url')->nullable();
			
			$table->string('makeup')->nullable();
			$table->string('makeup_url')->nullable();
			
			$table->string('hair')->nullable();
			$table->string('hair_url')->nullable();

			$table->string('cover_photo')->nullable();
			
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
		Schema::drop('setdesign');
	}

}
