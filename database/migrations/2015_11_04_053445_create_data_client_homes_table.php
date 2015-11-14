<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataClientHomesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('data_client_homes', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('client_data_id')->unsigned();
				$table->integer('priority_home')->unsigned();
				$table->string('address_name', 20);
				$table->string('responsible_address', 50);
				$table->string('address', 100)->unique();
				$table->integer('postal_code');
				$table->string('population', 50);
				$table->string('province', 50);
				$table->string('state', 50);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('data_client_homes');
	}
}
