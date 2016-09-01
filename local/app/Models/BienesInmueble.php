<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'bienes_inmuebles';

    protected $primaryKey = 'bienes_inmuebles_pk';

	public $timestamps = false;

    protected $fillable = [
        'identificacion_fk',
        'descripcion'
    ];

    protected $guarded = [];

        
}