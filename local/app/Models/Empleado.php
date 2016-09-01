<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'empleados';

    protected $primaryKey = 'empleado_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_empleado',
        'apellido_empleado',
        'jefe_fk',
        'puesto_fk',
        'unidad_fk',
        'usuario_fk'
    ];

    protected $guarded = [];

        
}