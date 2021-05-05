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
        <h2 class="text-center font-weight-bold">Bienvenido, {{$egresado->Nombre}} );</h2>
        <h4 class="text-center text-danger font-weight-normal">A continuacion se le presentan las opciones disponibles por las cuales podria iniciar tu tramite de titulacion, te en cuenta que segun la opcion que elijas tendrias que proporcionar los docuemntos que se soliciten.</h4>
        <div class="w-100"></div>
        @foreach ($egresado->plan->opciones as $opcion)
            <div class="col-sm">
            <a class="btn btn-success" href="{{url('/crearCita/' . $opcion->id )}}">{{$opcion->Nombre}}</a>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>



