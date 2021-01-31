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
    <form class="form-inline">



  	 
    <table class="table">
  <thead> 
    
</div>

 <td colspan="9"><center><label>Lista de Materiales</div></label></center>


 </td>

    <tr>
      
      <th scope="col">Codigo de Inventario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tiempo de Vida</th>
      <th scope="col" colspan="3">Acciones</th>
    </tr>

  </thead>
  <tbody class="body1">
   @forelse ($submat->material as $material)
   <tr>
     <th scope="row"><center>{{ $material->codigo }}</center></th>
      
     <td ><center>{{ $material->nombre}}</center></td>
      <td><center>{{ $material->vida }} horas</center></td> 
     
      
        
     <td>

      <a class="btn btn-success" href="{{ route('materiales.edit',$material->id)}}">Editar</a>
    </td>


        <td>
          
          <a class="btn btn-warning" href="{{ route('materiales.show',$material->id)}}">Mostrar</a>

        </td>

        <td>

            <form method="post" action="{{ url('/materiales/'.$material->id) }}">
            {{csrf_field() }}
             {{ method_field('DELETE') }}
             
           </form>
           <form action="{{ url('/materiales/'.$material->id) }}" method="post">
             <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('desea eliminar este material')">ELIMINAR</button>
             {{ csrf_field() }}
             {{ method_field('delete') }}
           </form>

         </td>
    
   </tr>
   @empty
   <tr>
     <td colspan="5">Sin Material Registrado</td>
   </tr>
      @endforelse
  </tbody>

</table>

      
    

 

     </div>
</div>
</div>
 

@endsection