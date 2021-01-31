@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i>Lista de Alumnos</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
		<div class="panel shadow">
		<div class="header">
			
		</div>
	<div class="inside">
	<center><h3>Lista de Alumnos Registrados</h3></center>
<hr>
  <form class="form-inline">



    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Nombre..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>

		
		<table class="table">
			<thead>
				 <td colspan="6" ><center><label>Lista de Alumnos Registrado</label></center></td>
				<tr>
					
					<th><center>Matricula</center></th>
					<th><center>Nombre(s)</center></th>
					<th><center>Apellidos</center></th>
					<th><center>Cutrimestre</center></th>
					<th><center>Correo Electronico</center></th>
					
				</tr>
			</thead>
			<tbody  class="body1">
				@forelse($users as $user)
				<tr>
					@if($user->id >=2)
					<td><center>{{ $user->control }}</center></td>
					<td><center>{{ $user->name }}</center></td>
					<td><center>{{ $user->a_Paterno }}&nbsp{{ $user->a_Materno }}</center></td>
					<td><center>{{ $user->Cuatri }}</center></td>
					<td><center>{{ $user->email }}</center></td>
					@endif
				</tr>
				 @empty
   <tr>
     <td colspan="5"><h5><center>Sin Usuarios Registrado</center></h5></td>
   </tr>
      @endforelse

			</tbody>
		</table>
		{{ $users->links() }}
</div>
	</div>

</div>





@endsection