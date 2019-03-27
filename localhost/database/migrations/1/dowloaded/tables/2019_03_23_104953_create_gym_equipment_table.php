<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGymEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gym_equipment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_gym')->unsigned()->nullable()->index('fk_gym_list_idx');
			$table->integer('id_equipment')->unsigned()->nullable()->index('fk_gym_equioment_idx');
			$table->integer('count_equipment')->nullable();
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
		Schema::drop('gym_equipment');
	}

}
