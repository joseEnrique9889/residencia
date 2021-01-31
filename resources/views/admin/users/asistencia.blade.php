@extends('admin.master')
@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/asistencia') }}"><i class="fas fa-users">&nbsp</i>Lista de Asistencia</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="panel shadow">
    <div class="header">
      
    </div>
  <div class="inside">
  <center><h3>Lista de Asistencia</h3></center>
<hr>
<center><h5>Filtrado Por Fecha y hora</h5></center>

  <form  action="{{route('buscar')}}" method ="POST">
       <br>
                @csrf
                

                    <div class="row">
                        <div class="container-fluid">

                            <div class="form-group row">
                              

                                <h5 for="date" style='margin-left:18%'><strong>Fecha: </strong></h5>
                                <div >
                                    <input type="date" class="form-control input-sm" id="fromDate" name="fromDate"  style='margin-left:6%' required/>
                                </div>
                                <h5 for="date" align="right" class=" col-sm-3" style='float:right; margin-right:0%'><strong>Hora:</strong></h5>

                                <div>
                                    <input type="time" class="form-control input-sm" id="toDate" name="toDate" required />
                                </div>
                            

                             <div >
                                    <button type="submit" class="btn" name="search" title="Buscar"style='margin-left:1%'><img src="{{ url('static/images/buscador.png') }}"/></button>
                                </div>
                                    <a align="right" href="#"  data-toggle="modal" data-target="#create" title="Reporte" style='margin-left:6%'><img src="{{ url('static/images/reporte.png') }}" class='img-fluid'>
                                    </a>
                                    <hr>
                              </div>
                            </div>

                            
                                    <hr>
                              </div>

                            </div>

                          </form>

                  


  <hr>
<div class="container-fluid">
  <div class="panel shadow">
   @include('coustom.message')
    <table class="table table-hover">
  <thead> 
 <td colspan="6" ><center><label>Lista De Asistencia</label></center></td>
    <tr>
      <th scope="col"><center>Matricula</center></th>
      <th scope="col"><CENTER>Nombre del Alumno</CENTER></th>
      <th scope="col"><CENTER>Grupo</CENTER></th>
      <th scope="col"><CENTER>Fecha</CENTER></th>
      <th scope="col"><CENTER>Hora</CENTER></th>
      <th scope="col"><center>Asistencia</center></th>
    </tr>
<tbody class="body1">
@forelse($asistencias as $asistencia)
 <tr id="{{$asistencia->id}}">

  <td><center>{{ $asistencia->usuario->control }}</center></td>
  <td><center>{{ $asistencia->usuario->name }}&nbsp;{{ $asistencia->usuario->a_Paterno }}&nbsp;{{ $asistencia->usuario->a_Materno }}</center></td>
  <td><center>{{ $asistencia->grupo }}</center></td>
  <td><center>{{ $asistencia->fecha }}</center></td>
  <td><center>{{ $asistencia->hora }}</center></td>
  <td class="tipo" data-original="{{$asistencia->rol}}"><center>{{ $asistencia->rol }}</center></td>
  </td>
    

</tr>
@empty
<tr>
  <td colspan="6"><center>SIN AlUMNOS REGISTRADO</center></td>
</tr>
@endforelse
@include('admin.reporteAsis.reporteAsistencia')
</tbody>
</div> 


@endsection

