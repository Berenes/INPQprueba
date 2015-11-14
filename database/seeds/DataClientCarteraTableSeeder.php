<?php

use Illuminate\Database\Seeder;

class DataClientCarteraTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\DataClientCartera::class , 20)->create();
	}
}
