<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'unidad';

    protected $primaryKey = 'unidad_pk';

	public $timestamps = false;

    protected $fillable = [
        'facultad_fk',
        'nombre_unidad',
        'jefe_fk'
    ];

    protected $guarded = [];

        
}