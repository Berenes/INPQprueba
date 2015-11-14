<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataClientContactsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('data_client_contacts', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->integer('client_data_id')->unsigned();
				$table->integer('priority_contact')->unsigned();
				$table->string('name_contact', 20);
				$table->string('hob_contact', 50)->nullable();
				$table->integer('fixed_telephone_contact')->unsigned();
				$table->integer('movil_telephone_contact')->unsigned();
				$table->string('email_contact')->unique();
				$table->date('bith_contact');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//Schema::drop('data_client_contacts');
	}
}
