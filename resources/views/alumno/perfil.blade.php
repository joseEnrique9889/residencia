@extends('alumno.layout')
@section('title', 'Lista')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/materiales') }}"><i class="fas fa-users"></i>Editar Perfil</h2></a>
</li>
@endsection
@section('content')
<div class="panel shadow">
   @include('coustom.message')
  <div class="inside">
  <form action="{{ route('perfil.update') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PATCH')

    <div class="container">

      <h3><center>Actualizar Perfil</center></h3>
      <hr>
      <div class="form-group">
      <label for="name">Nombre:</label>
       <input type="text" class="form-control" id="name" placeholder="nombre del rol"
       name="name" 
       value="{{ old('name', $perfil->name) }}"
       >
  </div>
<div class="form-group">
      <label for="email">Apellido Paterno:</label>
       <input type="text" class="form-control" id="slug" placeholder="Apellido Paterno"
       name="Apellido Paterno"
       value="{{ old('paterno',$perfil->a_Paterno) }}"
       >
  </div>
  <div class="form-group">
      <label for="email">Apellido Materno:</label>
       <input type="text" class="form-control" id="slug" placeholder="Apellido Materno"
       name="Apellido Materno"
       value="{{ old('paterno',$perfil->a_Materno) }}"
       >
  </div>
  <div class="form-group">
      <label for="email">Correo Electronico:</label>
       <input type="email" class="form-control" id="slug" placeholder="email"
       name="email"
       value="{{ old('email',$perfil->email) }}"
       >
  </div>

  <div class="form-group">
      <label for="email">Cuatrimestre:</label>
       <input type="number" class="form-control" id="slug" placeholder="Cuatrimestre"
       name="Cuatrimestre"
       value="{{ old('Cuatri',$perfil->Cuatri) }}"
       >
  </div>
  <div class="form-group">
      <label for="email">Matricula:</label>
       <input type="number" class="form-control" id="slug" placeholder="Matricula"
       name="Matricula"
       value="{{ old('control',$perfil->control) }}"
       >
  </div>

<center><input class="btn btn-success" type="submit" value="Actualizar"></center> 
</div>
</form>

@endsection