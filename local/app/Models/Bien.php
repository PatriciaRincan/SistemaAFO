<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'bien';

    protected $primaryKey = 'bien_pk';

	public $timestamps = false;

    protected $fillable = [
        'identificacion_fk',
        'marca_fk',
        'bien_principal_fk',
        'empleado_fk',
        'descripcion_equipo',
        'modelo',
        'serie'
    ];

    protected $guarded = [];

        
}