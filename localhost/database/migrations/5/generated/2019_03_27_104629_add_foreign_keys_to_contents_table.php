<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contents', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_articles_auth')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('binaryfile_id', 'fk_articles_binary')->references('id')->on('binaryfiles')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contents', function(Blueprint $table)
		{
			$table->dropForeign('fk_articles_auth');
			$table->dropForeign('fk_articles_binary');
		});
	}

}
