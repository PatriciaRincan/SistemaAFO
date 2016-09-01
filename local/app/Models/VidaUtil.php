<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'vida_util';

    protected $primaryKey = 'vida_util_pk';

	public $timestamps = false;

    protected $fillable = [
        'bienes',
        'factor_anual',
        'plazo'
    ];

    protected $guarded = [];

        
}