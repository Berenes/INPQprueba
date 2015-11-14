<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataClientSalesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('data_client_sales', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('client_data_id')->unsigned();
				$table->date('last_sale');
				$table->string('code_article', 20);
				$table->string('alias_article', 50);
				$table->text('description_article');
				//Habrá que crear una función para calcular la cantidad de ventas
				$table->integer('quantity_sale');
				$table->integer('price_last_sale');
				$table->float('deduction');
				$table->float('taxable');
				$table->float('tipe_iva');
				$table->integer('cuota_iva');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('data_client_sales');
	}
}
