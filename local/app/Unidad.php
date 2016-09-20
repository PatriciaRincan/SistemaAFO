<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model{
	protected $table='unidad';

	public function users(){
	return $this->hasMany('App\User','unidad','unidad_pk');
	}

}
