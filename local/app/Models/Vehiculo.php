<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'vehiculo';

    protected $primaryKey = 'vehiculo_pk';

	public $timestamps = false;

    protected $fillable = [
        'identificacion_fk',
        'marca_fk',
        'modelo',
        'numero_motor',
        'numero_chasis',
        'anio_fabricacion',
        'placa'
    ];

    protected $guarded = [];

        
}