
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
<div class="container">
    <br>
    <div class="row text-primary">
    <div class="col-md-4  font-weight-bold">     
        <div class=" text-center">
            1- INSTRUCCIONES
        </div>

    <div style=”text-align: justify;”>
        @if($opcion=="Tesis")
     <h4 class=" text-danger text-center  my-2 font-weight-bold">Tesis</h4>
     <p style=”text-align: justify;”> 
      A) Segun la opcion que hayas elegido se solicitara subir los archivos necesarios.<br>
      B) Despues de que hayas presentado tus archivos, procede a seleccionar una fecha y hora.<br>
      C) Acude el dia señalado 10 minutos antes de tu cita y ten listos tus docuemntos.<br>
      D) Si deseas explorar otras opciones de titulacion puedes regresar  <a class="text-danger" href="{{url('/egresado')}}">aqui.</a>
     </p>
      @endif
      
      @if($opcion=="Examen")
      <h4 class="text-center text-danger my-2 font-weight-bold">Examen</h4>
      <p style=”text-align: justify;”> 
       A) Segun la opcion que hayas elegido se solicitara subir los archivos necesarios.<br>
       B) Despues de que hayas presentado tus archivos, procede a seleccionar una fecha y hora.<br>
       C) Acude el dia señalado 10 minutos antes de tu cita y ten listos tus docuemntos.<br>
       D) Si deseas explorar otras opciones de titulacion puedes regresar  <a class="text-danger" href="{{url('/egresado')}}">aqui.</a>
      </p>  
      @endif

    </div>
    </div> 
    <div class="col-md-4 text-center font-weight-bold">
        <div class=" text-center">
            2- SUBE TUS REQUISITOS
        </div>

        <h4 class="text-center text-danger my-2 font-weight-bold">Tema:</h4> 


        <label for="documento">Agrega documentos PDF</label>

        <form method="POST" action="/documento" enctype="multipart/form-data"> 
            @csrf

        
        
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
