<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'especifico';

    protected $primaryKey = 'especifico_pk';

	public $timestamps = false;

    protected $fillable = [
        'cuenta_fk',
        'nombre_especifico',
        'descripcion_especifico'
    ];

    protected $guarded = [];

        
}