<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'proveedor';

    protected $primaryKey = 'proveedor_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_proveedor',
        'telefono_proveedor',
        'direccion_proveedor',
        'correo'
    ];

    protected $guarded = [];

        
}