@extends('admin.master')
@section('title', 'Lista de Asistencia')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/alumnos') }}"><i class="fas fa-users"></i>Lista de Asistencia</h2></a>
</li>
<li class="breadcrumb-item">
  <a ><i class="fas fa-users"></i>Confirmar Asistencia</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
   @include('coustom.message')
    <table class="table table-hover">
  <thead> 
 <td colspan="9" ><center><label>Fecha Y Hora de Asistencia</div></label></center></td>
    <tr>
      <th scope="col"><CENTER>Fecha</CENTER></th>
      <th scope="col"><CENTER>Hora</CENTE></th>
      <TH scope="col"><center>Grupo</center></TH>

      <th scope="col"><center>Accion</center></th>
    </tr>
<tbody class="body1">
@forelse($usuarios->Asistencia as $asistencia)
<center>
 
 <tr>
@if($asistencia->rol == 'No')
  <td>{{ $asistencia->fecha }}</td>
  <td>{{ $asistencia->hora }}</td>
  <td>{{ $asistencia->grupo }}</td>
   

<td>

  <form action="{{ url('/asistio/'.$asistencia->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')

 <center><input class="btn btn-success" type="submit" value="Asistio"></center> 
</form>
</div>
 


        </td>
</div>
</td>
@endif
</tr>
</center>

@empty
<tr>
  <td colspan="6"><center>ASISTENCIA NO RESERVADA</center></td>
</tr>
</tbody>
@endforelse
</table>

@endsection
 