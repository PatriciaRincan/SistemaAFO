<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'material_bibliografico';

    protected $primaryKey = 'material_pk';

	public $timestamps = false;

    protected $fillable = [
        'identificacion_fk',
        'autor_fk',
        'titulo',
        'isbn'
    ];

    protected $guarded = [];

        
}