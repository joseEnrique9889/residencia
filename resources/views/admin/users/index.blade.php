@extends('alumno.layout')

@section('content')
<div class="container-fluid">
  <div class="panel shadow">
   @include('coustom.message')
    <table class="table table-hover">
  <thead> 
 <td colspan="4" ><center><label>Materiales Reservado</label></center></td>
    <tr>
      <th scope="col"><CENTER>Nombre del Material</CENTE></th>
      <th scope="col"><CENTER>Cantidad</CENTE></th>
      <th scope="col"><CENTER>Fecha Reservada</CENTE></th>
      <th scope="col"><CENTER>Hora Reservada</CENTE></th>
    </tr>
<tbody class="body1">
@forelse($reservados as $reservado)
 <tr>
  <td>{{ $reservado->material->nombre }}</td>
  <td>{{ $reservado->cantidad }}</td>
  <td>{{ $reservado->fecha }}</td>
  <td>{{ $reservado->hora }}</td>
  </td>
    

</tr>
@empty
<tr>
  <td colspan="4"><center>SIN MATERIAL RESERVADO</center></td>
</tr>
@endforelse
</tbody>



@endsection
 
