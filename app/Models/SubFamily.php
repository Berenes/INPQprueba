<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubFamily extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sub_familys';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['family_id', 'alias', 'description'];

	//un post pertenece a un usuario
	public function family() {
		return $this->belongsTo('App\Models\Family');
	}

	//un posts tiene mucho comentarios
	public function mark() {
		return $this->hasMany('App\Models\Mark');
	}
}
