<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGymEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gym_equipment', function(Blueprint $table)
		{
			$table->foreign('id_equipment', 'fk_gym_equioment')->references('id')->on('equipments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_gym', 'fk_gym_list')->references('id')->on('gyms')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gym_equipment', function(Blueprint $table)
		{
			$table->dropForeign('fk_gym_equioment');
			$table->dropForeign('fk_gym_list');
		});
	}

}
