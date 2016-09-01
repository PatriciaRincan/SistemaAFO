<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'catalogo_activo';

    protected $primaryKey = 'catalogo_act_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_catalogo'
    ];

    protected $guarded = [];

        
}