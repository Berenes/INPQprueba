<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'marks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['alias', 'name', 'subfamily_id'];

	public function sub_family() {
		return $this->belongsTo('App\Models\SubFamily');
	}

	public function product() {
		return $this->hasMany('App\Models\Product');
	}

}
