@extends('alumno.layout')

@section('content')
<div class="container-fluid">
  <div class="panel shadow">

               <form action="{{ url('/reservas') }}" method="POST" enctype="multipart/form-data">
      @csrf
       <div class="fomr-group">
            <input type="hidden" class="form-control" name="material_id" value="{{ $material->id }}" required>
          </div>

      <div class="fomr-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha" required>
          </div>
      <div class="fomr-group">
            <label>Hora</label>
            <input type="time" class="form-control" name="hora" required>
          </div>
              


       <center><input class="btn btn-success" type="submit" value="Reservar"></center> 
  </form>
@endsection
</div>
