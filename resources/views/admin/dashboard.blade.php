@extends('admin.master')

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<center><h3 class="title">Tablero</h3></center>
		</div>
	
	<div class="container card ">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
            	 <div class="p-2 ">
			<div class="card" style="width: 20rem; height: 20rem">
				<a href="{{ url('/admin/users')}}"><img  class="card-img-top" src="{{ url('static/images/alumos.png') }}" alt="Card-img-cap"></a>
					<div class="card-body">
						<center><h5 class="card-title"><strong>Alumnos registrados</strong></h5></center>
						<p class="card-text">Total: {{ $users }}</p>
						</p>

					</div>
				</div>
			</div>
			<div class="p-2 ">
				<div class="card" style="width: 20rem;height: 20rem">
				<a href="{{ url('/materiales')}}"><img class="card-img-top" src="{{ url('static/images/materiales.jpg') }}" alt="Card-img-cap"></a>
					<div class="card-body">
						<center><h5 class="card-title"><strong>Materiales</strong></h5></center>
						<p class="card-text">Registrados: {{ $materiales}}</p></a>
						<p class="card-text">Reservados: {{ $reservas }}</p>
						
</div>

	</div>
</div>
<div class="p-2 ">
				<div class="card" style="width: 20rem; height: 20rem">
				<center><a href="{{ url('/materiales')}}"><img class="card-img-top" src="{{ url('static/images/png.png') }}" alt="Card-img-cap" style="width: 11rem;"></a></center>
					<div class="card-body">
						<center><h5 class="card-title"><strong>Generar Reporte de Materiales</h5></strong></center>
						<p class="card-text"><h6><strong>Materiales reservados</strong>&nbsp<a href="{{ url('/reportes')}}"><img class="card-img-top" src="{{ url('static/images/business-report.png') }}" alt="Card-img-cap" style="width: 2rem;"></h6></a></p>
						<p class="card-text"><h6><strong>Materiales existentes</strong>&nbsp<a href="{{ url('/materialexist')}}"><img class="card-img-top" src="{{ url('static/images/business-report.png') }}" alt="Card-img-cap" style="width: 2rem;"></h6></a></p>
						
</div>

	</div>
</div>
@endsection


