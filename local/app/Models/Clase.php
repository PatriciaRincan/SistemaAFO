<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'clase';

    public $timestamps = false;

    protected $fillable = [
        'clase_pk',
        'catalogo_fk',
        'nombre_clase'
    ];

    protected $guarded = [];

        
}