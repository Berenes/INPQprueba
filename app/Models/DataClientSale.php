<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataClientSale extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data_client_sales';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_data_id', 'last_sale', 'code_article', 'alias_article', 'description_article', 'quantity_sale', 'price_last_sale', 'deduction', 'taxable', 'tipe_iva', 'cuota_iva'];

	//un post pertenece a un usuario
	public function data_client() {
		return $this->belongsTo('App\Models\Data_Client');
	}
}