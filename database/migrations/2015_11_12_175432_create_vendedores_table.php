<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendedoresTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('vendedores', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name');
				$table->enum('titulo', ['Representante', 'Director General', 'Director Ventas']);
				$table->float('ventas');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('vendedores');
	}
}
