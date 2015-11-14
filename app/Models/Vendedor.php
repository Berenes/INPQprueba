<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vendedores';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'titulo', 'ventas'];

	//relación muchos a uno entre vendedor y pedidos
	public function pedido() {
		return $this->hasMany("App\Models\Product");
	}
	//relación muchos a uno entre vendedor y clientes
	public function client() {
		return $this->hasMany("App\Models\Client");
	}

}
