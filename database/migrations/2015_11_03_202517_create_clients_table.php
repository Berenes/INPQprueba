<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {
	/**
	 *
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('clients', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('vendedor_id')->unsigned();
				$table->string('name', 20);
				$table->string('business_name', 20);
				$table->integer('telephone');
				$table->timestamps();
				//$table->foreing('vendedor_id')->references('id')->on('vendedores');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('clients');
	}
}
