@extends('admin.master')
@section('title', 'Material Reservado')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/listaadeudos') }}"><i class="fas fa-users"></i>Lista de Alumnos que Adeudan Material</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Material adeudados</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
   @include('coustom.message')
    <table class="table table-striped">
  <thead> 
 <td colspan="9" ><center><label>Materiales</div></label></center></td>
    <tr>
      <th scope="col"><center>Codigo de Inventario</center></th>
      <th scope="col"><CENTER>Nombre del Material</CENTE></th>
      <th scope="col"><CENTER>Cantidad</CENTE></th>
      <th scope="col"><center>Comentario</center></th>
      
    </tr>
<tbody class="body1">
 
@forelse($usuarios->Reservas as $deudas)
<center>

 
 
 <tr>
 @if($deudas->deuda=='Si')
  <td><center>{{ $deudas->material->codigo }}</center></td>
  <td><center>{{ $deudas->material->nombre }}</center></td>
  <td><center>{{ $deudas->cantidad }}</center></td>
  <td><center>{{ $deudas->comentario }}</center></td>

@endif

</tr>


</center>

@empty

 
<tr>
  <td colspan="6"><center>NO TIENE MATERIAL RESERVADO</center></td>
</tr>

</tbody>
@endforelse
</table>

@endsection
 
