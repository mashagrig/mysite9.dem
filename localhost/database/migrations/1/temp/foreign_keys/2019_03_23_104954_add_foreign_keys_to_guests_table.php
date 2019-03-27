<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('guests', function(Blueprint $table)
		{
			$table->foreign('id_subscription', 'fk_quest_subscription')->references('id')->on('subscriptions')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('id_user', 'fk_quest_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('guests', function(Blueprint $table)
		{
			$table->dropForeign('fk_quest_subscription');
			$table->dropForeign('fk_quest_user');
		});
	}

}
