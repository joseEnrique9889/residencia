@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/materiales/edit') }}"><i class="fas fa-users"></i>Tiempo de uso</h2></a>
</li>
@endsection
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
    
  <div class="inside">
    
   <form action="{{ url('/vida/'.$vida->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    <center><h3>Tiempo de Uso</h3></center>
    <hr>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingrese el tiempo estimado de uso del material </em></label>
    <input type="double" name="tiempo" class="form-control" id="tiempo" placeholder="valores numericos.....">
  </div>
  

 <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
</form>
       
       
</div>


@endsection