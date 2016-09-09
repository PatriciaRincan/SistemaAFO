<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo URL::asset('img/Odontologia.png') ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo URL::asset('img/Odontologia.png') ?>" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo URL::asset('css/ingreso.css') ?>" type="text/css"> 
	<meta charset="utf-8"/>
	<meta http-equiv="Expires" content="0"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1" />		
	<title>INGRESO DE BIENES</title>
</head>
<body>
	

<div id="contenedor">
		<?php echo View::make('menu'); ?>
		<h1 id="tema">REGISTRO DE BIENES</h1>
		
		<section>
			@yield('content')
		</section>
		

	</div>
	<footer id="cierre">
		@if (Auth::check())
			<p>{{{Auth::user()->nombre }}} {{{Auth::user()->apellido }}}</p>
			<a href="{{url('logout')}}">Cerrar Sesión</a>
		@endif
	</footer>
</body>
</html>