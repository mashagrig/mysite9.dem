<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingShedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_shedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date_training')->nullable();
			$table->integer('id_training_time')->unsigned()->nullable()->index('fk_training_shedule_time_idx');
			$table->integer('id_trainer')->unsigned()->nullable()->index('fk_training_shedule_trainer_idx');
			$table->integer('id_section')->unsigned()->nullable()->index('fk_training_shedule_section_idx');
			$table->integer('id_gym')->unsigned()->nullable()->index('fk_training_shedule_gim_idx');
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
		Schema::drop('training_shedules');
	}

}
