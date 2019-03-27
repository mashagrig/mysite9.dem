<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrainingShedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('training_shedules', function(Blueprint $table)
		{
			$table->foreign('gym_id', 'fk_training_shedule_gym')->references('id')->on('gyms')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('section_id', 'fk_training_shedule_section')->references('id')->on('sections')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('training_time_id', 'fk_training_shedule_time')->references('id')->on('training_times')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('trainer_id', 'fk_training_shedule_trainer')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('training_shedules', function(Blueprint $table)
		{
			$table->dropForeign('fk_training_shedule_gym');
			$table->dropForeign('fk_training_shedule_section');
			$table->dropForeign('fk_training_shedule_time');
			$table->dropForeign('fk_training_shedule_trainer');
		});
	}

}
