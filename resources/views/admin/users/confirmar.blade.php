@extends('alumno.layout')

@section('content')
<div class="container-fluid">
  <div class="panel shadow">

               <form action="{{ url('/confirmar/'.$conf->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    <center><h3>Confirme Su Material</h3></center>
    <hr>
  <div class="form-group">
  	<h5> <center>USTED A RESERVADO EL SIGUIENTE MATERIAL</center></h5>
  	<hr>

    <center><h4>Nombre: {{ $conf->nombre }} </h4></center>

    
  <hr>

 <center><input class="btn btn-success" type="submit" value="confirmar"></center> 
</form>
     
       
</div>


@endsection
</div>