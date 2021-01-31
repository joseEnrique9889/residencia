@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href=""><i class="fas fa-users"></i>Estado de Material </h2></a>
</li>
@endsection
@section('content')
<div class="panel shadow">
  <hr>

  
    <form class="form-inline">


    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Codigo..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>
  	 
    <table class="table">
 
 <td colspan="12"><center><label>Estado de Materiales</div></label></center></td>
    <tr>
      
      <th scope="col">Codigo De Inventario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
     
    </tr>

  </thead>
  <tbody class="body1">

   @forelse ($materials as $material)
   @if($material->parent_id >0)
   <tr>
     <th scope="row">{{ $material->codigo }}</th>
      
     <td >{{ $material->nombre}}</td>

     
      
      <td>{{ $material->estado }}</td>
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


     </div>
</div>
</div>
@endsection