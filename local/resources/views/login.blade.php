<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="{{{ asset('img/Odontologia.png') }}}">
	<link rel="stylesheet" href="<?php echo URL::asset('css/login.css') ?>" type="text/css"> 
	<script  src="<?php echo URL::asset('js/presentacion.js') ?>" type="text/javascript"></script>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1" />		
	<title>GESTIÓN DE ACTIVO FIJO E INVENTARIO</title>
</head>
<body onload="javaSlideShow()">
<div id="contenedor">
		<header id="titulo">
			<img src="<?php echo URL::asset('img/Odontologia.png') ?>">
			<h1>FACULTAD DE ODONTOLOGIA</h1>
			<h2>UNIVERSIDAD DE EL SALVADOR</h2>
		</header>
		<div id="tema">
			<h2>GESTIÓN DE ACTIVO FIJO E INVENTARIO</h2>
		</div>
		<section id="datos">
			<h3>INICIAR SESIÓN</h3>
	        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
	        @if(Session::has('mensaje'))
	            <p id="mensaje">{{ Session::get('mensaje') }}</p>
	        @endif
	        {!! Form::open(array('url' => 'login', 'method'=>'post')) !!}
	       
	        {!! Form::label('usuario', 'USUARIO:', ['class' => 'etiquetas']) !!}
	        {!! Form::text('username', Input::old('username'), ['class' => 'textfield']) !!}
	  		{!! Form::label('contraseña', 'CONTRASEÑA:', ['class' => 'etiquetas']) !!}
	        {!! Form::password('password' , ['class' => 'textfield']) !!}
            <p class="recordar">{!! Form::label('Recordar', 'Recordar contraseña') !!} {!! Form::checkbox('remember', true)!!}</p>
			{!! Form::submit('Ingresar', ['class' => 'btnIngresar']) !!}
			{!! Form::close() !!}
		</section>
		<section id="imagenes">
			<img src="<?php echo URL::asset('img/UES.png')?>" name='SlideShow'>
		</section>
	</div>

</body>
</html>


