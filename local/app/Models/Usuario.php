<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'usuarios';

    public $timestamps = false;

    protected $fillable = [
        'usuario',
        'password',
        'contraseña',
        'tipo_usuario',
        'unidad',
        'remember_token'
    ];

    protected $guarded = [];

        
}