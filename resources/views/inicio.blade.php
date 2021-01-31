@extends('Layout.general')

@section('title', 'Inicio')

@section('content')
<body>
<table class="table">
	<tbody>
		<tr>
			<td class="logo">
				<img src="{{ url('static/images/upchiapas.png') }}" class='img-fluid'>
			</td>
			
			<td>
				<center>
				<h4>
					UNIVERSIDAD POLITECNICA DE CHIAPAS
				</h4>
				<br>
				<h5>
					LABORATORIO DE MECATRONICA Y TECNOLOGIAS DE MANUFACTURA
				</h5>
			</td>
			</center>
			

		</tr>
	</tbody>
				
</table>
</body>
<center>


<div class="box box_login shadow">
	<div class="header">
		<h1>BIENVENIDO</h1>
	<h3>¿QUE ACCION DESEA REALIZAR?</h3>

	<a href="{{ url('/login') }}" role="button" class="btn btn-success" data-toggle="modal">ingresar</a>
	<div class="mtop16">
	<a href="{{ url('/register') }}" role="button" class="btn btn-info" data-toggle="modal">Registrarse</a>
	</div>
		</center>

</div>
</div>