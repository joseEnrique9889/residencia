@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a><i class="fas fa-users"></i>Editar Material</h2></a>
</li>
@endsection
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
    
  <div class="inside">
    
   <form action="{{ url('/materiales/'.$materials->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    <center><h3>EDITAR </h3></center>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $materials->nombre }}" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{ $materials->descripcion }}" required>
  </div>
  


 <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
</form>
      <a href="{{ url('/materiales') }}"><button class="btn btn-danger">Regresar</button></a>    
       
</div>


@endsection