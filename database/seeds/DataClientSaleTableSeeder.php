<?php

use Illuminate\Database\Seeder;

class DataClientSaleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\DataClientSale::class , 20)->create();
	}
}
