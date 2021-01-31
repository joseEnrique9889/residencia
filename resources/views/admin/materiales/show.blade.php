@extends('admin.master')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/materiales/edit') }}"><i class="fas fa-users"></i>Editar Material</h2></a>
</li>
@endsection
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
    
  <div class="inside">
    
   <form action="{{ url('/materiales/'.$materials->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    <center><h3>Detalles del material </h3></center>
    <h4>Nombre:  {{ $materials->nombre }}</h4>
 <div>
<center><h4>Imagen</h4></center>    
  <br>
    
    <center>  <img src="{{ asset('storage').'/'.$materials->imagen}}" alt="" width="150"></center>
    
    </div>
<div>
  <h4>Descripcion</h4>
  <br>
  <h5>{{ $materials->descripcion }}</h5>
</div>
<br>
<div>
  <h4>Cantidad en existencia:  {{ $materials->cantidad }}</h4>
  <br>
    
</div>

      <a href="{{ url('/materiales') }}"><button class="btn btn-danger">Regresar</button></a>    
       
</div>


@endsection