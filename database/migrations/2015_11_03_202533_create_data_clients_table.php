<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataClientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('data_clients', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('client_id')->unsigned();
				$table->string('business_name', 20);
				$table->integer('nif')->unsigned();
				$table->enum('status', ['baja', 'activo', 'potencial']);
				$table->integer('zone');
				$table->integer('fixed_telephone')->unsigned();
				$table->integer('movil_telephone')->unsigned()->nullable();
				$table->integer('other_telephone')->unsigned()->nullable();
				$table->integer('fax')->unsigned()->nullable();
				$table->integer('tipe_client');
				$table->string('website', 100)->nullable();
				$table->string('email')->unique();
				$table->float('saldo')->unsigned();
				$table->timestamps();
				//$table->foreing('client_id')->references('id')->on('clients')->onDelete('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('data_clients');
	}
}
