<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipmentGymTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipment_gym', function(Blueprint $table)
		{
			$table->foreign('equipment_id', 'fk_gym_equioment')->references('id')->on('equipments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('gym_id', 'fk_gym_list')->references('id')->on('gyms')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipment_gym', function(Blueprint $table)
		{
			$table->dropForeign('fk_gym_equioment');
			$table->dropForeign('fk_gym_list');
		});
	}

}
