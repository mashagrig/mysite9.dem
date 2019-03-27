<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supports', function(Blueprint $table)
		{
			$table->foreign('guest_id', 'fk_supports_quest_id')->references('id')->on('guests')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('user_id', 'fk_supports_user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supports', function(Blueprint $table)
		{
			$table->dropForeign('fk_supports_quest_id');
			$table->dropForeign('fk_supports_user_id');
		});
	}

}
