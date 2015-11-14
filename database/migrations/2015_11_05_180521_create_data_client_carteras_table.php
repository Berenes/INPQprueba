<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataClientCarterasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('data_client_carteras', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('client_data_id')->unsigned();
				$table->integer('invoice')->unsigned();
				$table->date('date_invoice');
				$table->integer('amount')->unsigned();
				$table->date('expiration');
				$table->boolean('sw_returned');
				$table->enum('tipe_document', ['recibo', 'transferencia', 'pagare']);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('data_client_carteras');
	}
}
