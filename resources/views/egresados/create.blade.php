
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

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
para la opcion solicitada ({{$opcion->Nombre}})
<div class="container">
    <br>
    <div class="row text-primary">
    <div class="col-md-4  font-weight-bold">     
        <div class=" text-center">
            1- INSTRUCCIONES
        </div>

    <div style=”text-align: justify;”>
        <ol>
        @foreach ($opcion->requisitos as $requisito)
            <li>{{$requisito->Concepto}}:{{$requisito->Descripcion}}</li>
        @endforeach 
    </ol>

    </div>
    </div> 
    <div class="col-md-4 text-center font-weight-bold">
        <div class=" text-center">
            2- SUBE TUS REQUISITOS
        </div>
        <form method="POST" action="/documento" enctype="multipart/form-data"> 
            @csrf

        @foreach ($opcion->requisitos as $requisito)
        <label for="documento">Agrega documento PDF para {{$requisito->Concepto}}</label>
        <input type="file" class="form-control" name="documento" multiple>
        @endforeach 
        <button type="submit" class="btn btn-primary my-4">SUBIR</button>
        </form>

        
    
    </div>
    <div class="col-md-4 text-center font-weight-bold">
        <div class="row text-center text-primary">
            3- AGENDA TU CITA
        </div>  
       <div class="row my-4">
        <form method="POST" action="/crearCita" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control" name ="cita"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-4">Guardar</button>
        </form>
    </div>
       
    </div>
    </div>
    
    </div>
