<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataClientHome extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data_client_homes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_data_id', 'priority_home', 'address_name', 'responsible_address', 'address', 'postal_code', 'population', 'province', 'state'];

	//un post pertenece a un usuario
	public function data_client() {
		return $this->belongsTo('App\Models\Data_Client');
	}
}
