<?php

use Illuminate\Database\Seeder;

class SubFamilyTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\SubFamily::class , 100)->create();
	}
}
