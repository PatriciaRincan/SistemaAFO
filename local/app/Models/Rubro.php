<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'rubro';

    protected $primaryKey = 'rubro_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_rubro',
        'descripcion_rubro'
    ];

    protected $guarded = [];

        
}