<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Models\User::class )->create([
				"name"           => "David Sánchez Agüera",
				"email"          => "jailbreakkk@yahoo.es",
				"password"       => bcrypt("berenes"),
				'remember_token' => 'berenes',

			]);
	}
}
