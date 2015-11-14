<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('marks', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('sub_family_id');
				$table->string('alias', 20);
				$table->string('name', 20);
				$table->timestamps();
				//$table->foreign('sub_family_id')->references('id')->on('sub_familys');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('marks');
	}
}
