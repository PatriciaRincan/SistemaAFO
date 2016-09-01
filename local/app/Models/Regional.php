<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'regional';

    protected $primaryKey = 'regional_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_regional',
        'ubicacion',
        'telefono_regional',
        'direccion_regional'
    ];

    protected $guarded = [];

        
}