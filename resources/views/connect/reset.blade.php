@extends('connect.master')

@section('title', 'Recuperar Contraseña')

@section('content')
<div class="box box_login shadow">
	<div class="header">
		<center><h4>Recuperar Contraseña</h4></center>
		<a href="{{ url('/') }}">

		<img src="{{ url('/static/images/login_icon.png') }}"></a>
	</div>

	<div class="inside">
	{!! Form::open(['url' => '/reset']) !!}
	<center><h4 for="email">Correo Electronico:</h4></center>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
		</div>

	{!! Form::email('email', $email, ['class' => 'form-control', 'required']) !!}
	</div>
	<center><h4 for="code" class="mtop16">Codigo de Recuperacion:</h4></center>
	<div class="input-group mb-2">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-unlock"></i></div>
		</div>

	{!! Form::text('code', null, ['class' => 'form-control', 'required']) !!}
	</div>
	
	{!! Form::submit('Enviar mi contraseña', ['class' => 'btn btn-success mtop16']) !!}
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
				setTimeout(function(){ $('.alert').slideUp(); }, 10000);
			</script>
		</div>
	</div>
	@endif
	<div class="footer mtop16">
		<a href="{{ url('/register') }}">No tienes una cuenta?, Registrate</a>
		<a href="{{ url('/login') }}">Ingresar a mi cuenta</a>
	</div>
	</div>
	
</div>

@stop