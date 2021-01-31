@extends('alumno.layout')

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<center><h2 class="title">TABLERO</h2></center>
		</div>
	
	<div class="container card ">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
            	 <div class="p-2 ">
			<div class="card" style="width: 21rem;">
		 <a align="right" href="#" class="btn btn-success" data-toggle="modal" data-target="#create"><img  class="card-img-top" src="{{ url('static/images/asistencia.png') }}" alt="Card-img-cap"></a>
					<div class="card-body">
					<h4>Registra tu Asistencia Aqui</h4>
						</p>

					</div>
				</div>
			</div>
		<div class="p-2 ">
				<div class="card" style="width: 20rem;">
				<a href="{{ url('/material')}}"><img class="card-img-top" src="{{ url('static/images/reserve.png') }}" alt="Card-img-cap"></a>
					<div class="card-body">
						<h5 class="card-title">Reserva Tu Material</h5>
						
</div>

	</div>
</div>
<div class="p-2 ">
				<div class="card" style="width: 20rem;">
				<a href="{{ url('/reservas')}}"><img class="card-img-top" src="{{ url('static/images/reservas.png') }}" alt="Card-img-cap"></a>
					<div class="card-body">
						<h5 class="card-title">Materiales Reservados</h5>
						
</div>

	</div>
</div>
</div>
@include('admin.users.asistencia_create')
@endsection