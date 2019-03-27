<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSingupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('singups', function(Blueprint $table)
		{
			$table->foreign('guest_id', 'fk_singups_quest_id')->references('id')->on('guests')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('trainingshedule_id', 'fk_singups_trainingshedule_id')->references('id')->on('trainingshedules')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('singups', function(Blueprint $table)
		{
			$table->dropForeign('fk_singups_quest_id');
			$table->dropForeign('fk_singups_trainingshedule_id');
		});
	}

}
