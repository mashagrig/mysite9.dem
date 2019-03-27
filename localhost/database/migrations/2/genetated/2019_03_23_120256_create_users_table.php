<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('login', 45);
			$table->string('password', 45)->unique('password_UNIQUE');
			$table->integer('user_personal_info_id')->unsigned()->nullable()->index('fk_user_personal_info_idx');
			$table->integer('user_role_id')->unsigned()->nullable()->index('fk_user_role_idx');
			$table->timestamp('date_ctreate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
