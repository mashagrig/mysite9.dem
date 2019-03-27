<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSingupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('singups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('guest_id')->unsigned()->nullable()->index('fk_singups_quest_id_idx');
			$table->integer('trainingshedule_id')->unsigned()->nullable()->index('fk_singups_trainingshedule_id_idx');
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
		Schema::drop('singups');
	}

}
