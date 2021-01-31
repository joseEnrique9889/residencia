@extends('admin.master')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/usuarios') }}"><i class="fas fa-users"></i>Lista de Alumnos que Reservaron</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Material Reservado</h2></a>
</li>
<li class="breadcrumb-item">
  <a><i class="fas fa-vials"></i>Recibir Material</h2></a>
</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="panel shadow">
               
                <center><h4>Recibir Material</h4></center>

                
           
<form action="{{ url('/entregar/'.$entregar->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    

      <div class="form-group">
   
    <div class="alert alert-info" role="alert">
    Como Recibio El Material:<textarea name="comentario" id="comentario" class="form-control" rows="2" value="{{ $entregar->comentario }}"></textarea>
  </div>
  

 <center><input class="btn btn-success" type="submit" value="Recibir"></center> 
</form>
</div>


</div>
</div>
@endsection
</div>
