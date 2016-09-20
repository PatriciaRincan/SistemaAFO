<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Unidad;
use App\User;

class PdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("reportes.listado_unidades");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function crearPDF($datos,$vistaurl,$tipo)
	{
		$data= $datos;
		$date = date('Y-m-d');
		$view = \View::make($vistaurl,compact('data','date'))->render();
		$pdf=\App::make('dompdf.wrapper');
		$pdf -> loadHTML($view);
		$pdf->setPaper('legal','landscape');

		if($tipo==1){return $pdf->stream('reporte');}
		if($tipo==2){return $pdf->download('reporte.pdf');}
		
	}

	public function crear_reporte_por_unidad($tipo){
		$vistaurl='reportes.reporte_por_unidad';
		$unidad=Unidad::all();
		return $this->crearPDF($unidad,$vistaurl,$tipo);
	}

}
