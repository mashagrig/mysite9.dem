<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('guest_id')->unsigned()->nullable()->index('fk_support_quest_idx');
			$table->integer('user_support_id')->unsigned()->nullable()->index('fk_support_tech_idx');
			$table->timestamp('date_create')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('question', 16777215)->nullable();
			$table->text('answer', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supports');
	}

}
