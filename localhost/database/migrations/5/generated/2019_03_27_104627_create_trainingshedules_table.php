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
			$table->integer('trainingtime_id')->unsigned()->nullable()->index('fk_training_shedule_time_idx');
			$table->integer('user_id')->unsigned()->nullable()->index('fk_training_shedule_trainer_idx');
			$table->integer('section_id')->unsigned()->nullable()->index('fk_training_shedule_section_idx');
			$table->integer('gym_id')->unsigned()->nullable()->index('fk_training_shedule_gim_idx');
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
