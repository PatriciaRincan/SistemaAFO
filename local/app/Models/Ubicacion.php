<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'ubicacion';

    protected $primaryKey = 'ubicacion_pk';

	public $timestamps = false;

    protected $fillable = [
        'unidad_fk',
        'ubicacion',
        'ubicacion_principal_fk'
    ];

    protected $guarded = [];

        
}