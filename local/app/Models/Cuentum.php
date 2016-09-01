<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'cuenta';

    protected $primaryKey = 'cuenta_pk';

	public $timestamps = false;

    protected $fillable = [
        'rubro_fk',
        'nombre_cuenta',
        'descripcion_cuenta'
    ];

    protected $guarded = [];

        
}