@extends('alumno.layout')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/materiales') }}"><i class="fas fa-users"></i>Lista de Materiales</h2></a>
</li>
@endsection
@section('content')
<div class="panel shadow">
   @include('coustom.message')
  <div class="inside">

    <hr>

    <form class="form-inline">



    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="nombre..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>
  	 
    <table class="table">
  <thead> 
 <td colspan="9"><center><label>Lista de Materiales</div></label></center></td>
    <tr>
      
      <th scope="col">codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha y hora de reservacion</th>
      <th scope="col">Confirmar</th>
    </tr>

  </thead>
  <tbody class="body1">
   @forelse ($materials as $material)
   
   @if($material->parent_id >0)
    

   <tr>
     <th scope="row">{{ $material->codigo }}</th>
      
     <td >{{ $material->nombre}}</td>

        
        <td>
          @if($material->cambio==null)
        
          <a href="{{ url('/reservar/'.$material->id.'/create') }}" role="button" class="btn btn-info">Fecha De Reservacion</a>
          @endif
        </td>
      
        <td>
          
         @if($material->cambio==null)
         <a href="{{ url('/confirmar/'.$material->id.'/confirmar') }}" role="button" class="btn btn-success">confirmar Reserva</a>
           @endif
         
        </td>
  
    @endif
   </tr>
   @empty
   <tr>
     <td colspan="5">Sin Material Registrado</td>
   </tr>
      @endforelse
  </tbody>

</table>
<table >
 
  
</table>


</div>
</div>
 


@endsection