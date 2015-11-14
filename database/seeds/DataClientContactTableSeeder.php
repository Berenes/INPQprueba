<?php

use Illuminate\Database\Seeder;

class DataClientContactTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\DataClientContact::class , 20)->create();
	}
}
