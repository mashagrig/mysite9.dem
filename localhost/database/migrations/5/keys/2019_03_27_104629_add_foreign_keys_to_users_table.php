<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('personalinfo_id', 'fk_users_personalinfo_id')->references('id')->on('personalinfos')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('role_id', 'fk_users_role_id')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_personalinfo_id');
			$table->dropForeign('fk_users_role_id');
		});
	}

}
