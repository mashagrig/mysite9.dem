<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSingUpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sing_ups', function(Blueprint $table)
		{
			$table->foreign('id_guest', 'fk_sing_up_quest')->references('id')->on('guests')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('id_training_shedule', 'fk_sing_up_shedule')->references('id')->on('training_shedules')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sing_ups', function(Blueprint $table)
		{
			$table->dropForeign('fk_sing_up_quest');
			$table->dropForeign('fk_sing_up_shedule');
		});
	}

}
