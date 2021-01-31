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

        <img src="{{ url('static/images/logo 3.png') }}" class='img-fluid' style='float:right; margin-right:5%; width: 6rem'>
      
<p><strong>UNIVERSIDAD POLITECNICA DE CHIAPAS<strong><p>
  <p><strong>Constancia de no Adeudo<strong><p>
 

 </header>
        
<div class="container">
  <br>
    <div align="right"><h7>Tuxtla Gutierrez Chis. a {{ $today }}</h7> </div>
<p><font size="4"><strong>Asunto:</strong>&nbsp;Constancia</font></p>
<br>

<p><font size="4"><strong>A quien corresponda</strong></font></p>
<br>



<div style="text-align: justify">
<p><font size="4">Por medio de la presente, me permito informar que después de haber hecho la revisión correspondiente, el alumno <strong>{{$constancia->name }}&nbsp;{{ $constancia->a_Paterno }}&nbsp;{{ $constancia->a_Materno }}</strong>,con matrícula <strong>{{ $constancia->control }}</strong> de la Ingeniería en Mecatronica de  perteneciente a la Facultad de Ingeniería Mecatronica, de la Universidad Politecnica de Chiapas, no tiene ningún tipo de adeudo en material de laboratorio </font></p>
  </div>
  <div style="text-align: justify">
  <p ><font size="4">
    Es así como, a petición del interesado y para poder continuar con su trámite de titulación, se expide la presente carta de no adeudo de material de laboratorio en la ciudad de Tuxtla Gutierrez Chiapas, a {{ $today }}
  </font>
 </p>
</div>
<div style="text-align: justify">
  <p ><font size="4">
    Sin más por el momento, agradezco su atención, quedando a sus órdenes para cualquier duda o aclaración que de la presente se pudiera derivar.
  </font>
 </p>
</div>
<br>
<div style="text-align: center;">
  <p ><font size="4">
    <STRONG>
    ATENTAMENTE
    </STRONG>
  </font>
 </p>
<br>
<br>
<br>

 <div style="text-align: center;">
  <p >
    
  _________________________________
    
  
 </p>
</div>
<br>
<div style="text-align: center;">
  <p ><font size="4">
    <STRONG>
    Juan Perez
    </STRONG>
    <br>
    <strong>
    Jefe de Laboratorio de Mecatronica
    </strong>
    <br>

<strong>
Universidad Politecnica De Chiapas
</strong>
  </font>
 </p>

</div>


</body>
</html>