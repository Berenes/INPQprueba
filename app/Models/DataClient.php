<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataClient extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data_clients';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_id', 'business_name', 'nif', 'status', 'zone', 'fixed_telephone', 'movil_telephone', 'other_telephone', 'fax', 'tipe_client', 'website', 'email', 'saldo'];

	//relación uno a uno entre cliente y DatosCliente
	public function client() {
		return $this->belongsTo("App\Models\Client");
	}

	//relacion uno a uno entre DatosCliente y DatosClienteContactos

	public function data_client_contact() {
		return $this->hasOne("App\Model\DataClientContact");
	}

	//relacion uno a uno entre DatosCliente y DatosClienteDomicilios

	public function data_client_home() {
		return $this->hasOne("App\Model\DataClientHome");
	}

	//relacion uno a uno entre DatosCliente y DatosClienteVentas

	public function data_client_sale() {
		return $this->hasOne("App\Model\DataClientSale");
	}

	//relacion uno a uno entre DatosCliente y DatosClienteCartera

	public function data_client_cartera() {
		return $this->hasOne("App\Model\DataClientCartera");
	}

}
