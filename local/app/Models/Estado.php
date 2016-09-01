<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'estado';

    protected $primaryKey = 'estado_pk';

	public $timestamps = false;

    protected $fillable = [
        'estado',
        'descripcion_estado'
    ];

    protected $guarded = [];

        
}