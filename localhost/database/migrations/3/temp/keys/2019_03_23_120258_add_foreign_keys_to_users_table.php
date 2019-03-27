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
			$table->foreign('user_personal_info_id', 'fk_user_personal_info')->references('id')->on('personal_infos')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('user_role_id', 'fk_user_role')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('SET NULL');
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
			$table->dropForeign('fk_user_personal_info');
			$table->dropForeign('fk_user_role');
		});
	}

}
