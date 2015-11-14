<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataClientContact extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data_client_contacts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_data_id', 'priority_contact', 'name_contact', 'hob_contact', 'fixed_telephone_contact', 'movil_telephone_contact', 'email_contact', 'bith_contact'];

	//un post pertenece a un usuario
	public function data_client() {
		return $this->hasOne('App\Models\DataClient');
	}

}