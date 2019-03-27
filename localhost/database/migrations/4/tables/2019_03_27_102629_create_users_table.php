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
			$table->string('name', 255)->unique();
			$table->string('email', 255)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 255);
			$table->string('remember_token', 100)->nullable();
			$table->integer('user_personal_info_id')->unsigned()->nullable()->index('fk_user_personal_info_idx');
			$table->integer('user_role_id')->unsigned()->nullable()->index('fk_user_role_idx');
			$table->timestamps();
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
