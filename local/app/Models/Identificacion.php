<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'identificacion';

    protected $primaryKey = 'identificacion_pk';

	public $timestamps = false;

    protected $fillable = [
        'clase_fk',
        'catalogo_fk',
        'especifico_fk',
        'unidad_fk',
        'ubicacion_fk',
        'fuente_fk',
        'proveedor_fk',
        'correlativo',
        'fecha_adquisicion',
        'valor_adquisicion'
    ];

    protected $guarded = [];

        
}