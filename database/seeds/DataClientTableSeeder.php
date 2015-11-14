<?php

use Illuminate\Database\Seeder;

class DataClientTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\DataClient::class , 20)->create();
	}
}
