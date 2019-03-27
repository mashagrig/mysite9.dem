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
			$table->foreign('guest_id', 'fk_support_quest')->references('id')->on('guests')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('user_support_id', 'fk_support_tech')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
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
			$table->dropForeign('fk_support_quest');
			$table->dropForeign('fk_support_tech');
		});
	}

}
