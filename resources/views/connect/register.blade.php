@extends('connect.master')

@section('title', 'Registro')

@section('content')
<div class="box box_Register shadow">
	<div class="header">
		<center><h1>REGISTRO</h1></center>
	</div>

	<div class="inside">
	{!! Form::open(['url' => '/register']) !!}
	<label for="name">Nombre(s):</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user"></i></div>
		</div>

	{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="a_Paterno" class="mtop16">Apellido Paterno:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user"></i></div>
		</div>

	{!! Form::text('a_Paterno', null, ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="a_Materno" class="mtop16">Apellido Materno:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user"></i></div>
		</div>

	{!! Form::text('a_Materno', null, ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="control" class="mtop16">N.Control:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="far fa-id-card"></i></div>
		</div>

	{!! Form::text('control', null, ['class' => 'form-control', 'required']) !!}
	</div>

	<label for="Cuatri" class="mtop16">Cuatrimestre:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user-graduate"></i></div>
		</div>

	{!! Form::text('Cuatri', null, ['class' => 'form-control', 'required']) !!}
	</div>


	<label for="email" class="mtop16">Correo Electronico:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
		</div>

	{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="password" class="mtop16">Contraseña:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-unlock"></i></div>
		</div>

	{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="cpassword" class="mtop16">Confirmar Contraseña:</label>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-unlock"></i></div>
		</div>

	{!! Form::password('cpassword', ['class' => 'form-control', 'required']) !!}
	</div>
	{!! Form::submit('Registrarse', ['class' => 'btn btn-success mtop16']) !!}
	{!! Form::close() !!}
	@if(Session::has('message'))
	<div class="container">
		<div class="metop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
			{{ Session::get('message') }}
			@if ($errors->any())
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			<script>
				$('.alert').slideDown();
				setTimeout(function(){ $('.alert').slideUp(); }, 1000);
			</script>
		</div>
	</div>
	@endif
	<div class="footer mtop16">
		<a href="{{ url('/login') }}">Ya tengo Cuenta Ingresar</a>
		
	</div>
	</div>


	
</div>

@stop