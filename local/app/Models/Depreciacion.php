<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'depreciacion';

    protected $primaryKey = 'depreciacion_pk';

	public $timestamps = false;

    protected $fillable = [
        'identificacion_fk',
        'vida_util_fk',
        'valor_residual',
        'depreciacion_anual',
        'valor_actual',
        'anios_del_bien',
        'depreciacion_acumulada',
        'depreciacion_mensual'
    ];

    protected $guarded = [];

        
}