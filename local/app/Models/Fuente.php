<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'fuente';

    protected $primaryKey = 'fuente_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_fuente',
        'descripcion_fuente'
    ];

    protected $guarded = [];

        
}