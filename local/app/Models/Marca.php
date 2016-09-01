<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'marca';

    protected $primaryKey = 'marca_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_marca'
    ];

    protected $guarded = [];

        
}