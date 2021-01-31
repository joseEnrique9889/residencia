@extends('admin.master')
@section('title', 'Asistencia')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/alumnos') }}"><i class="fas fa-users"></i>Lista de Asistencia</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">

    <center><h4>Lista de Asistencia</h4></center>
<hr>
  <form class="form-inline">

    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Nombre..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>
   @include('coustom.message')
    <table class="table table-hover">
  <thead> 
 <td colspan="2"><center><label>Alumnos Registrados</div></label></center></td>
    <tr>
     
      <th scope="col">Alumno</th>
      <th scope="col">Reservacion</th>
    </tr>

  </thead>
  <tbody class="body1">
    @forelse($usuarios as $usuario)
    <tr>
      @if($usuario->id >=2)
    <td scope="row">{{ $usuario->name}}</td>
        <td>
          <a href="{{ url('/alumnos/'.$usuario->id.'/Asistencia') }}" role="button" class="btn btn-success">Asistencia</a>
        </td>
        @endif
      
    </tr>

     @empty
   <tr>
     <td colspan="5">Sin Alumno Registrado</td>
   </tr>
      @endforelse
        
  </tbody>
  

</table>
{{ $usuarios->links() }}

  </div>
    

@endsection