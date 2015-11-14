<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clients';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'business_name', 'telephone', 'vendedor_id'];

	//relación uno a uno entre cliente y DatosCliente
	public function data_client() {
		return $this->hasOne("App\Models\DataClient");
	}
	//relación Cliente pertenece a Vendedor
	public function vendedor() {
		return $this->belongsTo("App\Models\Vendedor");
	}

	//Un cliente tiene muchos pedidos
	public function pedidos() {
		return $this->hasMany("App\Moasdels\Pedido");
	}
}
