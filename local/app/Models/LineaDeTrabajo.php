<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'linea_de_trabajo';

    protected $primaryKey = 'linea_de_trabajo_pk';

	public $timestamps = false;

    protected $fillable = [
        'unidad_presupuestaria_fk',
        'nombre_linea'
    ];

    protected $guarded = [];

        
}