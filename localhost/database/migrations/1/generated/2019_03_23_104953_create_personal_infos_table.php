<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('surname', 45)->nullable();
			$table->string('name', 45)->nullable();
			$table->string('middle_name', 45)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('telephone', 45)->nullable();
			$table->date('birthdate')->nullable();
			$table->string('info')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal_infos');
	}

}
