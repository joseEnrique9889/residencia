@extends('admin.master')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/usuarios') }}"><i class="fas fa-users"></i>Lista de Alumnos que Reservaron</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Material Reservado</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Material No Recibido</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
  <div class="panel shadow">
               
                <center><h4>Material No Regresado  </h4></center>
               <hr>
     
     <center></center>   
             
<form action="{{ url('/adeudo/'.$deuda->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    
 <div class="alert alert-info" role="alert">
 	<h6>Nombre del Material: <strong>{{ $deuda->material->nombre  }}</strong></h6>

    <h5>Comentario: </h5> <textarea name="comentario" id="comentario" class="form-control" rows="2" value="{{ $deuda->comentario }}"></textarea>
  </div>
  

 <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
</form>
</div>


</div>
</div>
@endsection
</div>