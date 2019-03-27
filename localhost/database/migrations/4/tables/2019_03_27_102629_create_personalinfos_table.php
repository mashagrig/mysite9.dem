<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalinfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personalinfos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('surname', 255)->nullable();
			$table->string('name', 255)->nullable();
			$table->string('middle_name', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('telephone', 255)->nullable();
			$table->date('birthdate')->nullable();
			$table->string('info', 255)->nullable();
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
		Schema::drop('personalinfos');
	}

}
