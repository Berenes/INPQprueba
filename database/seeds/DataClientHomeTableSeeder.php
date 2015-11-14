<?php

use Illuminate\Database\Seeder;

class DataClientHomeTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\DataClientHome::class , 20)->create();
	}
}
