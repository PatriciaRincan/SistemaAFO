<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'traslado_m2';

    protected $primaryKey = 'traslado_pk';

	public $timestamps = false;

    protected $fillable = [
        'unidad_entrega_fk',
        'unidad_recibe_fk',
        'jefe_entrega_fk',
        'jefe_recibe_fk',
        'jefe_activo_fk',
        'fecha_traslado',
        'tipo_traslado',
        'observacion'
    ];

    protected $guarded = [];

        
}