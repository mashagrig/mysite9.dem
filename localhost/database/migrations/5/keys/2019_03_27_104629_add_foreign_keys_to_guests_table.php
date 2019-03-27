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
			$table->foreign('subscription_id', 'fk_quests_subscription_id')->references('id')->on('subscriptions')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('user_id', 'fk_quests_user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
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
			$table->dropForeign('fk_quests_subscription_id');
			$table->dropForeign('fk_quests_user_id');
		});
	}

}
