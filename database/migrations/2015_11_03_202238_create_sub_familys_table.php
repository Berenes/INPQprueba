<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubFamilysTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sub_familys', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('family_id')->unsigned();
				$table->string('alias', 20);
				$table->string('description', 20);
				$table->timestamps();
				$table->foreign('family_id')->references('id')->on('familys')->onDelete('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

		Schema::drop('sub_familys');
	}
}
