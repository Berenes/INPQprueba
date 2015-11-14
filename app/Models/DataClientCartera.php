<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataClientCartera extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data_client_carteras';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_data_id', 'invoice', 'date_invoice', 'amount', 'expiration', 'sw_returned', 'tipe_document'];

	//un post pertenece a un usuario
	public function data_client() {
		return $this->belongsTo('App\Models\Data_Client');
	}

}