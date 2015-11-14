<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['mark_id', 'name', 'description', 'price'];

	//Un producto pertenece a una marca
	public function mark() {
		return $this->belongsTo("App\Models\Mark");
	}
}
