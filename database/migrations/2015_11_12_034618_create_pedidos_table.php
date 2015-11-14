<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('pedidos', function (Blueprint $table) {
				$table->increments('id');
				$table->date('date_pedido');
				$table->integer('client_id');
				$table->integer('vendedor_id');
				$table->integer('product_id');
				$table->integer('importe');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('pedidos');
	}
}
