<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'descargo_m3';

    protected $primaryKey = 'descargo_pk';

	public $timestamps = false;

    protected $fillable = [
        'fase_fk',
        'unidad_fk',
        'jefe_facultad_fk',
        'jefe_activo_fk',
        'fecha_descargo',
        'lugar_descargo',
        'motivo_descargo',
        'observacion'
    ];

    protected $guarded = [];

        
}