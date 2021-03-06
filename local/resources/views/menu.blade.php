<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo URL::asset('css/menu.css') ?>" type="text/css"> 		
</head>
<body>
	<header id="titulo">
		<div id="auth">
			@if (Auth::check())
			<p>{{{Auth::user()->nombre }}} {{{Auth::user()->apellido }}}&nbsp&nbsp <a href="{{url('logout')}}">(Cerrar Sesión)</a></p>
			@endif
		</div>
		<div id="subtitulo">
			<img src="<?php echo URL::asset('img/Odontologia.png') ?>">
			<h1>FACULTAD DE ODONTOLOGIA</h1>
			<h2>UNIVERSIDAD DE EL SALVADOR</h2>
		</div>
		<section class="menu">
			<div>
		        <nav>
		            <ul>
		                <li><a href="{{url('ingreso')}}">Registro</a></li>
		                <li><a href="#">Traslado</a></li>
		                <li><a href="#">Préstamo</a></li>
		                <li><a href="#">Descargo</a></li>
		                <li><a href="#">Formularios</a></li>
		                <li><a href="{{url('consulta')}}">Consultar</a></li>
		                <li><a href="#">Historial</a></li>
		                <li><a href="#">Usuarios</a></li>	
		                <li class="active"><a href="{{url('listado_unidades')}}" onclick="cargarlistado(3,1);"><i class="fa fa-circle-o"></i>Reportes</a></li>	
		                
		            </ul>
		   		</nav>
		   	</div>
    	</section>
	</header>
</body>
</html>