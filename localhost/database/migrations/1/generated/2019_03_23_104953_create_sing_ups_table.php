<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSingUpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sing_ups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_guest')->unsigned()->nullable()->index('fk_sing_up_quest_idx');
			$table->integer('id_training_shedule')->unsigned()->nullable()->index('fk_sing_up_shedule_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sing_ups');
	}

}
