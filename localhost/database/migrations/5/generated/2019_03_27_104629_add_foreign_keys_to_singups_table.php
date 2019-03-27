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
			$table->foreign('guest_id', 'fk_sing_up_quest')->references('id')->on('guests')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('trainingshedule_id', 'fk_sing_up_shedule')->references('id')->on('trainingshedules')->onUpdate('CASCADE')->onDelete('SET NULL');
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
			$table->dropForeign('fk_sing_up_quest');
			$table->dropForeign('fk_sing_up_shedule');
		});
	}

}
