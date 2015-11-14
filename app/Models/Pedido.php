<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pedidos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['date_pedido', 'clien_id', 'vendedor_id', 'product_id', 'importe'];

	//Un pedido pertenece a un cliente
	public function client() {
		return $this->belongsTo("App\Models\Client");
	}
	//Un pedido pertenece a un producto
	public function product() {
		return $this->belongsTo("App\Models\Product");
	}
	// Un pedido pertenece a un vendedor
	public function vendedor() {
		return $this->belongsTo("App\Models\Vendedor");
	}
}
