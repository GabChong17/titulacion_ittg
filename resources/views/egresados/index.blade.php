<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITTG</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>


<div class="container">
<div class="row" >
    <div class="container my-4">
        <h2 class="text-center font-weight-bold">Bienvenido, Gabo</h2>
    </div>

    <div class="container">
        <h4 class="text-center text-danger font-weight-normal">A continuacion se le presentan las opciones disponibles por las cuales podria iniciar tu tramite de titulacion, te en cuenta que segun la opcion que elijas tendrias que proporcionar los docuemntos que se soliciten.</h4>
    </div>
   
</div>
<br>
<div class="row text-center">
<div class="col-md-4">
    
    <a  class="btn btn-success" href="{{url('/crearCita/Tesis')}}">Tesis</a>
</div>
<div class="col-md-4">
    
    <a  class="btn btn-success" href="{{url('/crearCita/Opc')}}">Opc</a>
</div>
<div class="col-md-4">
    
    <a  class="btn btn-success" href="{{url('/crearCita/Examen')}}">Examen Global de Conocimiento</a>
</div>
</div>

</div>
</body>
</html>



