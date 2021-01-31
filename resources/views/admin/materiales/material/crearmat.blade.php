@extends('admin.master')
@section('title', 'Lista')
@section('content')
<div class="container-fluid">
    <div class="panel shadow">

                <h2> <CENTER>Agregar Material</CENTER> </h2>
              <form action="{{ url('/submat') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="fomr-group">
            <input type="hidden" class="form-control" name="parent_id" value="{{ $submat->id }}">
          </div>
   <div class="form-group">
    <input type="hidden" name="nombre"  class="form-control" id="nombre" value="{{ $submat->nombre }}" required>
  </div>
  <div class="form-group">
    <label for="codigo">Codido de Inventario</label>
    <input type="text" name="codigo" class="form-control" id="codigo" required>
  </div>
  <div class="form-group">
    <label for="vida">Tiempo de Vida <em><strong>1= 1hora</strong></em></label>
    <input type="double" name="vida" class="form-control" id="vida" required>
  </div>
  <div class="form-group">
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option>Bueno</option>
            <option>Regular</option>
            <option>Malo</option>
            
        </select>
    </div>  
  <div class="form-group">
    <label for="a_paterno">Descripcion del Material: </label>
    <input type="text" name="descripcion" class="form-control" id="a_paterno" required>
  </div>
   

  
  <center><input class="btn btn-success" type="submit" value="Agregar Material"></center> 
  
</form>
</form>
@endsection