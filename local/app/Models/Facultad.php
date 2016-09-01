<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'facultad';

    protected $primaryKey = 'facultad_pk';

	public $timestamps = false;

    protected $fillable = [
        'regional_fk',
        'linea_de_trabajo_fk',
        'nombre_facultad'
    ];

    protected $guarded = [];

        
}