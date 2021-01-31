@extends('admin.master')
@section('title', 'Reservas')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/usuarios') }}"><i class="fas fa-users"></i>Lista de Alumnos que Reservaron</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
   @include('coustom.message')
   <center><h3>Lista de Alumnos que Reservaron Material</h3></center>
<hr>
  <form class="form-inline">



    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Nombre..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>
    <table class="table table-hover">
  <thead> 
 <td colspan="2"><center><label>Alumnos que reservaron material</div></label></center></td>
    <tr>
     
      <th scope="col"><center>Nombre del Alumno</center></th>
      <th scope="col"><center>Reservaciones</center></th>
    </tr>

  </thead>
  <tbody class="body1">
    @forelse($usuarios as $usuario)
    <tr>
      @if($usuario->id >=2)
    <td scope="row"><h6><center>{{ $usuario->name}}&nbsp{{ $usuario->a_Paterno }}&nbsp{{ $usuario->a_Materno  }}</center></h6></td>
        <td>
         <center> <a href="{{ url('/usuarios/'.$usuario->id.'/Reservas') }}" role="button" class="btn btn-success">Reservas</a></center>
        </td>
        @endif
      
    </tr>

     @empty
   <tr>
     <td colspan="5">Sin Usuarios Registrado</td>
   </tr>
      @endforelse
        
  </tbody>
  

</table>
{{ $usuarios->links() }}

  </div>
    

@endsection