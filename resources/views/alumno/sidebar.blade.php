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
				<a href="{{ url('/alumno')}}"><i class="fas fa-home"></i>Inicio</a>
			</i>
			<li>
				<a href="{{ url('/material')}}"><i class="fas fa-list-alt"></i>Material Disponible</a>
			</i>

			<li>
				<a href="{{ url('/reservas')}}"><i class="fas fa-vials"></i>Materiales Reservado</a>
			</i>
			
		</ul>
	</div>
</div>