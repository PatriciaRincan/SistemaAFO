<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'fase';

    protected $primaryKey = 'fase_pk';

	public $timestamps = false;

    protected $fillable = [
        'fase',
        'descripcion_fase'
    ];

    protected $guarded = [];

        
}