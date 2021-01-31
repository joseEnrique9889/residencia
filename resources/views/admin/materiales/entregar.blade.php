@extends('admin.master')
@section('title', 'Lista')
@section('content')
<div class="container-fluid">
    <div class="panel shadow">

                <h2> <CENTER>RECIBIR MATERIAL</CENTER> </h2>
              <div class="modal-body">
               <form action="{{ url('/recibir') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="fomr-group">
            <input  class="form-control" name="reservar_id" value="{{ $recibir->id }}">
          </div>
      
        <div class="alert alert-info" role="alert">
    Como Recibio El Material:<textarea name="comentario" id="comentario" class="form-control" rows="2" value="{{ $recibir->comentario }}"></textarea>
        </div>
  
              <div>
                <hr>
       <center><input class="btn btn-success" type="submit" value="Reservar"></center> 
       </div>
     </form>

<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
@endsection