<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'autor';

    protected $primaryKey = 'autor_pk';

	public $timestamps = false;

    protected $fillable = [
        'nombre_autor'
    ];

    protected $guarded = [];

        
}