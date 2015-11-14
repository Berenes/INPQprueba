<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */
$factory->define(App\Models\User::class , function (Faker\Generator $faker) {
		return [
			'name'           => $faker->name,
			'email'          => $faker->email,
			'password'       => bcrypt('secreta'),
			'remember_token' => 'secreta',
		];
	});

$factory->define(App\Models\Family::class , function (Faker\Generator $faker) {
		return [
			'alias'       => ucwords($faker->word),
			'description' => strtoupper($faker->word)
		];
	});
$factory->define(App\Models\SubFamily::class , function (Faker\Generator $faker) {
		return [
			'family_id'   => rand(1, 20),
			'alias'       => ucwords($faker->word),
			'description' => strtoupper($faker->word)
		];
	});
$factory->define(App\Models\Mark::class , function (Faker\Generator $faker) {
		return [
			'alias'         => ucwords($faker->word),
			'name'          => strtoupper($faker->word),
			'sub_family_id' => rand(1, 20)
		];
	});

$factory->define(App\Models\Pedido::class , function (Faker\Generator $faker) {
		return [
			'date_pedido' => $faker->dateTime,
			'client_id'   => rand(1, 20),
			'vendedor_id' => rand(1, 20),
			'product_id'  => rand(1, 100),
			'importe'     => rand(10, 10000),
		];
	});

$factory->define(App\Models\Vendedor::class , function (Faker\Generator $faker) {
		return [
			'name'   => $faker->name,
			'titulo' => $faker->randomElement(['Representante', 'Director General', 'Director Ventas']),
			'ventas' => rand(10, 100000)
		];
	});

$factory->define(App\Models\Product::class , function (Faker\Generator $faker) {
		return [
			'mark_id'     => rand(1, 20),
			'name'        => strtoupper($faker->word),
			'description' => $faker->text(200),
			'price'       => rand(10, 100),
		];
	});

$factory->define(App\Models\Client::class , function (Faker\Generator $faker) {
		return [
			'name'          => $faker->name,
			'business_name' => $faker->isbn10,
			'telephone'     => $faker->ean8,
			'vendedor_id'   => rand(1, 10)
		];
	});

$factory->define(App\Models\DataClient::class , function (Faker\Generator $faker) {
		return [
			'client_id'       => rand(1, 20),
			'business_name'   => $faker->isbn10,
			'nif'             => $faker->ean8,
			'status'          => $faker->randomElement(['baja', 'activo', 'potencial']),
			'zone'            => rand(1, 5),
			'fixed_telephone' => $faker->phoneNumber,
			'movil_telephone' => $faker->phoneNumber,
			'other_telephone' => $faker->phoneNumber,
			'fax'             => $faker->phoneNumber,
			'tipe_client'     => rand(1, 3),
			'website'         => $faker->url,
			'email'           => $faker->email,
			'saldo'           => $faker->randomFloat(20, 1000)
		];
	});

$factory->define(App\Models\DataClientContact::class , function (Faker\Generator $faker) {
		return [
			'client_data_id'          => rand(1, 20),
			'priority_contact'        => rand(1, 4),
			'name_contact'            => $faker->name,
			'hob_contact'             => $faker->word,
			'fixed_telephone_contact' => $faker->phoneNumber,
			'movil_telephone_contact' => $faker->phoneNumber,
			'email_contact'           => $faker->email,
			'bith_contact'            => $faker->dateTime
		];
	});

$factory->define(App\Models\DataClientHome::class , function (Faker\Generator $faker) {
		return [
			'client_data_id'      => rand(1, 20),
			'priority_home'       => rand(1, 4),
			'address_name'        => $faker->streetName,
			'responsible_address' => $faker->name,
			'address'             => $faker->address,
			'postal_code'         => $faker->postcode,
			'population'          => $faker->city,
			'province'            => $faker->cityPrefix,
			'state'               => $faker->state
		];
	});

$factory->define(App\Models\DataClientSale::class , function (Faker\Generator $faker) {
		return [
			'client_data_id'      => rand(1, 20),
			'last_sale'           => $faker->dateTime,
			'code_article'        => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
			'alias_article'       => $faker->word,
			'description_article' => $faker->text,
			'quantity_sale'       => $faker->numberBetween(1000, 9000),
			'price_last_sale'     => $faker->numberBetween(1000, 9000),
			'deduction'           => '10%',
			'taxable'             => $faker->numberBetween(1000, 9000),
			'tipe_iva'            => 21,
			'cuota_iva'           => $faker->numberBetween(50, 500)
		];
	});
$factory->define(App\Models\DataClientCartera::class , function (Faker\Generator $faker) {
		return [
			'client_data_id' => rand(1, 20),
			'invoice'        => $faker->numberBetween(0, 10000),
			'date_invoice'   => $faker->dateTime,
			'amount'         => $faker->numberBetween(1000, 9000),
			//Habría que crear una función que crease la fecha de vencimiento
			'expiration'    => $faker->dateTime,
			'sw_returned'   => rand(0, 1),
			'tipe_document' => $faker->randomElement(['recibo', 'transferencia', 'pagare'])

		];
	});
