<?php

namespace DummyNamespace;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class DummyClass extends Model
{
    protected $table = 'ingreso_m1';

    protected $primaryKey = 'ingreso_pk';

	public $timestamps = false;

    protected $fillable = [
        'linea_de_trabajo_fk',
        'fuente_fk',
        'proveedor_fk',
        'fase_fk',
        'unidad_fk',
        'jefe_recibe_fk',
        'jefe_facultad_fk',
        'jefe_activo_fk',
        'numero_factura',
        'fecha_factura',
        'numero_acuerdo',
        'fecha_acuerdo',
        'donante',
        'cef',
        'orden_de_compra',
        'saldo_inicial',
        'valor_total',
        'fecha_ingreso',
        'observacion'
    ];

    protected $guarded = [];

        
}