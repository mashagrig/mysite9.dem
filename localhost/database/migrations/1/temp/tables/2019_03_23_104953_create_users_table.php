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
            $table->bigIncrements('id');
            $table->string('name'); //login
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique(); //passwords
            $table->rememberToken();
			$table->integer('id_user_personal_info')->unsigned()->nullable()->index('fk_user_personal_info_idx');
			$table->integer('id_user_role')->unsigned()->nullable()->index('fk_user_role_idx');
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
