@extends('admin.master')
@section('title', 'Reservas')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/listaadeudos') }}"><i class="fas fa-users"></i>Lista de Alumnos que adeudan material</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
   @include('coustom.message')
   <center><h3>Lista de Alumnos que adeudan material</h3></center>
<hr>

  <form class="form-inline">



    <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Nombre..." aria-label="Search" style="margin-left: 70%">


       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <hr>
  
    <table class="table table-hover">
  <thead> 
 <td colspan="3"><center><label>Alumnos que adeudan material</div></label></center></td>
    <tr>
     <th scope="col"><center>Matricula</center></th>
      <th scope="col"><center>Nombre</center></th>
      <th scope="col"><center>Material adeudados</center></th>
    </tr>

  </thead>
  <tbody class="body1">
    @forelse($usuarios as $usuario)
      
      @if($usuario->id >=2)  
    <tr>
       
  
    <td scope="row"><h6><center>{{ $usuario->control }}</center></h6></td>
    <td scope="row"><h6><center>{{ $usuario->name}}&nbsp{{ $usuario->a_Paterno }}&nbsp{{ $usuario->a_Materno  }}</center></h6></td>
        <td>

         <center> <a href="{{ url('/deudas/'.$usuario->id.'/deudas') }}" role="button" class="btn btn-success">Ver</a></center>
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