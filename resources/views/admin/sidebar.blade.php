<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<img src="{{ url('static/images/avatar.png') }}" class='img-fluid'>
		</div>
		<div class="user">
			<span class="subttitle">Hola:</span>
			<div class="name">
				{{ Auth::user()->name }} {{ Auth::user()->apellido }}
				<a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
			</div>
			<div class="email">{{ Auth::user()->email }}</div>
		</div>
	</div>
	<div class="main">
		<ul>
			<li>
				<a href="{{ url('/admin')}}"><i class="fas fa-home"></i>Inicio</a>
			</i>
			<li>
				<a href="{{ url('/materiales')}}"><i class="fas fa-list-alt"></i>Material Disponible</a>
			</i>
			<li>
				<a href="{{ url('/usuarios')}}"><i class="fas fa-vials"></i>Materiales Reservados</a>
			</i>

			
			<li>
				<a href="{{ url('/estado')}}"><i class="fas fa-vials"></i>Estado del Material</a>
			</i>

			<li>
				<a href="{{ url('/admin/users')}}"><i class="fas fa-users"></i>Lista de Alumnos Registrados</a>
			</i>
			
			<li>
				<a href="{{ url('/alumnos')}}"><i class="fas fa-users"></i>Revisar Asistencias</a>
			</i>
			
			<li>
				<a href="{{ url('/asistencia')}}"><i class="fas fa-users"></i>Lista de asistencia</a>
			</i>
			<li>
				<a href="{{ url('/listaadeudos')}}"><i class="fas fa-list"></i>Lista de Alumnos Que adeudan Material</a>
			</i>
			
			<li>
				<a href="{{ url('/reportes')}}"><i class="fas fa-flask"></i>Generar Reporte de Materiales Reservado</a>
			</i>

			<li>
				<a href="{{ url('/materialexist')}}"><i class="fas fa-flask"></i>Generar Reporte de Materiales en Existencia</a>
			</i>

			
		</ul>
	</div>
</div>