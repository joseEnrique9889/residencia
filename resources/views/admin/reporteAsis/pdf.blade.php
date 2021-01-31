<!DOCTYPE html>
<html>
<head>
	<title>BITACORA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ url('/static/css/admin.css?v='.time()) }}">
  <link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/tabla.css?v='.time()) }}">

  <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }

        body {
            margin: 4cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            color: black;
            text-align: center;
            font-size: 20px;
            line-height: 30px;

        }
       
         
         
}​​





        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
</head>

<body>

<header>
  <br>

        <img src="{{ url('static/images/upchiapas.png') }}" class='img-fluid' style='float:left; margin-left:5%'>

        
      
<p><strong>UNIVERSIDAD POLITECNICA DE CHIAPAS<strong><p>
  <p><strong>LABORATORIO DE MECATRONICA Y TECNOLOGIAS DE MANUFACTURA<strong><p>


          </header>
<div class="container">
  <center><h5>Reporte de Asistencia</h5></center>
  <br>

  <table class="table table-bordered border-primary">

  <thead> 
  
    <tr>


      <th scope="col"><center>Matricula</center></th>
      <th scope="col"><center>Nombre del Alumno</center></th>
      <th scope="col"><center>Grupo</center></th>
      <th scope="col"><CENTER>Fecha</CENTER></th>
      <th scope="col"><CENTER>Hora</CENTER></th>
      <th scope="col"><center>Asistencia</center></th>
    </tr>
  </thead>

<tbody class="body1">
@forelse($asistencias as $asistencia)
 
 <tr>
  <td><center>{{ $asistencia->usuario->control }}</center></td>
  <td><center>{{ $asistencia->usuario->name }}&nbsp;{{ $asistencia->usuario->a_Paterno }}&nbsp;{{ $asistencia->usuario->a_Materno  }}</center></td>
  <td><center>{{ $asistencia->grupo }}</center></td>
  <td><center>{{ $asistencia->fecha }}</center></td>
  <td><center>{{ $asistencia->hora }}</center></td>
  <td><center>{{ $asistencia->rol }}</center></td>
  
  </td>
    

</tr>

@empty
<tr>
  <td colspan="6"><center>Ningun Alumno Asistio en la Fecha Establecida</center></td>
</tr>
@endforelse

</tbody>
</table>
</div>

</body>
</html>