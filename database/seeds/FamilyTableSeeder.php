<?php

use Illuminate\Database\Seeder;

class FamilyTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\Family::class , 20)->create();
	}
}
