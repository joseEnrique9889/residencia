@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/materiales') }}"><i class="fas fa-users"></i>Lista de Materiales</h2></a>
</li>
@endsection
@section('content')
<div class="panel shadow">
  <div class="inside">
    <hr>

    <form class="form-inline">



    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="nombre..." aria-label="Search" style="margin-right: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>

   <div style="text-align: right;">
  <a align="right" href="#" class="btn btn-success" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>
    Nuevo material
</a>
<hr>
  	 
    <table class="table">
  <thead> 
   
</div>

 <td colspan="10"><center><label>Lista de Materiales</div></label></center>


 </td>

    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">Agregar Existencia</th>
      <th scope="col">Existencia</th>
      
      
    </tr>

  </thead>
  <tbody class="body1">
   @forelse ($materials as $material)
   @if($material->parent_id ==0)
   <tr>
      
     <td ><center>{{ $material->nombre}}</center></td>


       <td>
         <center> <a href="{{ url('/submat/'.$material->id.'/create') }}" role="button" class="btn btn-success">Agregar</a></center>
         
        </td>
        <td>
        <center>
     
            <a href="{{ url('/materials/'.$material->id.'/index')}}" role="button" class="btn btn-warning">ver</a></center>
          </td>
        

        
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
 
@include('admin.materiales.create')

@endsection