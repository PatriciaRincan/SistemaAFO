@extends('plantilla.plantilla')
<link rel="stylesheet" href="<?php echo URL::asset('css/reportes.css') ?>" type="text/css">
@section('content')
<div> 
	<h1 id="encabezado">REPORTE M1</h1>
 </div>
 <div id="let">
     <tbody >
    <tr >
      <td  >1. </td>
      <td > REPORTE M1</td>
      <td><a href="crear_reporte_por_unidad/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
      <td><a href="crear_reporte_por_unidad/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                    
    </tr>
    

  </tbody>
  </div>
@endsection