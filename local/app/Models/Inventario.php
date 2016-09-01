<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'inventario';

    protected $primaryKey = 'inventario_pk';

	public $timestamps = false;

    protected $fillable = [
        'ingreso_fk',
        'traslado_fk',
        'descargo_fk',
        'unidad_fk',
        'estado_fk',
        'identificacion_fk',
        'ubicacion_fk',
        'bien_fk',
        'fecha_inventario',
        'activo',
        'inicio',
        'fecha_verificacion',
        'observacion',
        'movimiento',
        'unidad_traslado'
    ];

    protected $guarded = [];

        
}