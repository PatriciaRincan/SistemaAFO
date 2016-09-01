<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'puesto';

    protected $primaryKey = 'puesto_pk';

	public $timestamps = false;

    protected $fillable = [
        'titulo_puesto'
    ];

    protected $guarded = [];

        
}