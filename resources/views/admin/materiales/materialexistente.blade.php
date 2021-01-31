@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/materialexist') }}"><i class="fas fa-users"></i>Materiales en Existencia</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
<div class="panel shadow">

 <h5> <center><strong>REPORTE DE MATERIALES EN EXISTENCIA</strong></center></h5>


 
 <hr>
                                    
    <table class="table">
  <thead> 

 <td colspan="9"><center><label>Lista de Materiales</div></label></center>


 </td>

    <tr>
      
      <th scope="col"><center>Codigo</center></th>
      <th scope="col"><center>Nombre</center></th>
      <th scope="col"><center>Estado</center></th>
      <th scope="col"><center>Tiempo de Vida Restante</center></th>
      
    </tr>

  </thead>
  <tbody class="body1">
   @forelse ($materials as $material)
   @if($material->parent_id >0)
   <tr>
     <th scope="row"><center>{{ $material->codigo }}</center></th>
      
     <td ><center>{{ $material->nombre}}</center></td>
     <td><center>{{ $material->estado }}</center></td>
     <td><center>{{ $material->vida }}<em>horas</em></center></td>

   

   </tr>
   @endif
   @empty
   <tr>
     <td colspan="5">Sin Material Registrado</td>
   </tr>
      @endforelse
  </tbody>

</table>

{{ $materials->links() }}
<h5><center><strong>Generar Reporte</strong></center></h5>
<hr>
<center><a  title="generar reporte"  href="{{ url("/reporteMat")}}"><img src="{{ url('static/images/reporteMaterial.png') }}" class='img-fluid' style="width: 80px"></a></center>

 
</div>
</div>

     </div>
</div>
</div>

@endsection