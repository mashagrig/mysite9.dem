<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingshedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainingshedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date_training')->nullable();
			$table->integer('trainingtime_id')->unsigned()->nullable()->index('fk_trainingshedules_trainingtime_id_idx');
			$table->integer('user_id')->unsigned()->nullable()->index('fk_trainingshedules_user_id_idx');
			$table->integer('section_id')->unsigned()->nullable()->index('fk_trainingshedules_section_id_idx');
			$table->integer('gym_id')->unsigned()->nullable()->index('fk_trainingshedules_gym_id_idx');
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
		Schema::drop('trainingshedules');
	}

}
