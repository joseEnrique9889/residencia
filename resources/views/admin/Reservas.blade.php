@extends('admin.master')
@section('title', 'Material Reservado')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/usuarios') }}"><i class="fas fa-users"></i>Lista de Alumnos que Reservaron</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Material Reservado</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
   @include('coustom.message')
    <table class="table table-striped">
  <thead> 
 <td colspan="9" ><center><label>Materiales Reservado</div></label></center></td>
    <tr>
      <th scope="col">codigo del material</th>
      <th scope="col"><CENTER>Nombre del Material</CENTE></th>
      <th scope="col"><CENTER>Fecha Reservada</CENTER></th>
      <th scope="col"><CENTER>Hora Reservada</CENTER></th>
     
      <th scope="col" colspan="2">Recibir</th>
       <th scope="col"><center>Tiempo de Uso</center></th>
    </tr>
<tbody class="body1">
@forelse($usuarios->Reservas as $Reservas)
<center>
 
 <tr>

  <td><center>{{ $Reservas->material->codigo }}</center></td>
  <td><center>{{ $Reservas->material->nombre }}</center></td>
  <td><center>{{ $Reservas->fecha }}</center></td>
  <td><center>{{ $Reservas->hora }}</center></td>


   

  @if($Reservas->recibir=='NoRegresado' && $Reservas->deuda=='No')
  
<td>
   
  <a href="{{ url('/entregar/'.$Reservas->id.'/edit') }}" role="button" class="btn btn-success">Si</a>
</td>

<td>
  <a href="{{ url('/adeudo/'.$Reservas->id.'/adeudo') }}" role="button" class="btn btn-danger">No</a>

</td> 

 
@else
<td colspan="2"><center>{{ $Reservas->recibir }}</center></td>


@endif

<td>
 
  @if($Reservas->recibir=='Regresado' && $Reservas->material->cambio==2)

  
  <a href="{{ url('/vida/'.$Reservas->material->id.'/vida') }}" role="button" class="btn btn-info">Ingresar</a>
  
  

  @endif
  @if($Reservas->material->cambio==null)
  registrado
  @endif
</td> 

      
    

</div>


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
 
