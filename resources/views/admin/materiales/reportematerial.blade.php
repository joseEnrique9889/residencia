@extends('admin.master')
@section('breadcrumb')
<li class="breadcrumb-item">
 <a href="{{ url('/reportes') }}"><i class="fas fa-list-alt">&nbsp</i>Lista de Materiales Reservado</h2></a>
</li>
@endsection
@section('content')
<div class="container-fluid">
  <div class="panel shadow">
   @include('coustom.message')
   <div class="container">
    <center><h4>Lista De Materiales Reservados</h4></center>
    <hr>
    <form  action="{{route('search')}}" method ="POST">
       <br>
                @csrf
                

                    <div class="row">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <h5 for="date" style='margin-left:6%'><strong>Fecha Inicio: </strong></h5>
                                <div >
                                    <input type="date" class="form-control input-sm" id="fromDate" name="fromDate"  style='margin-left:6%' required/>
                                </div>
                                <h5 for="date" align="right" class=" col-sm-3" style='float:right; margin-right:0%'><strong>Fecha Termino:</strong></h5>

                                <div>
                                    <input type="date" class="form-control input-sm" id="toDate" name="toDate" required />
                                </div>
                            

                             <div >
                                    <button type="submit" class="btn" name="search" title="Buscar"style='margin-left:1%'><img src="{{ url('static/images/buscador.png') }}"/></button>
                                </div>

                                <a align="right" href="#"  data-toggle="modal" data-target="#create" title="Reporte" style='margin-left:8%'><img src="{{ url('static/images/reporte.png') }}" class='img-fluid'>
                                    </a>
                                    <hr>
                              </div>
                            </div>

                          </form>


  

    <table class="table table-hover">
  <thead> 
 <td colspan="5" ><center><label>Lista De Materiales Reservados</label></center></td>
    <tr>
      <th scope="col">Nombre del Alumno</th>
      <th scope="col"><center>Codigo de Inventario</center></th>
      <th scope="col"><CENTER>Nombre del Material</CENTE></th>
      <th scope="col"><CENTER>Fecha Reservada</CENTE></th>
      <th scope="col"><CENTER>Hora Reservada</CENTE></th>
    </tr>
<tbody class="body1">
@forelse($reservados as $reservado)
 
 <tr>

  <td>{{ $reservado->usuario->name }}&nbsp;{{ $reservado->usuario->a_Paterno }}&nbsp;{{ $reservado->usuario->a_Materno }}</td>
  <td>{{ $reservado->material->codigo }}</td>
  <td>{{ $reservado->material->nombre }}</td>
  <td>{{ $reservado->fecha }}</td>
  <td>{{ $reservado->hora }}</td>
  
  </td>
    

</tr>

@empty
<tr>
  <td colspan="5"><center>SIN MATERIAL RESERVADO</center></td>
</tr>
@endforelse

</table>
{{ $reservados->links() }}
@include('admin.materiales.generarReporte')

@endsection