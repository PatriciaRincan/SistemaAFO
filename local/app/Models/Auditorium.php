<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'auditoria';

    protected $primaryKey = 'auditoria_pk';

	public $timestamps = false;

    protected $fillable = [
        'fecha',
        'terminal',
        'usuario_fk',
        'inventario_fk',
        'ingreso_fk',
        'traslado_fk',
        'descargo_fk'
    ];

    protected $guarded = [];

        
}