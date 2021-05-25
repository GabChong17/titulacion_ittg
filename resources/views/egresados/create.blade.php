
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

<script>
        function validar() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("boton_enviar").disabled = !(( document.getElementById('cita_d').value.length  )&& (document.getElementById('fecha').value.length)&& (document.getElementById('document_1').value.length)&& (document.getElementById('document_2').value.length)&& (document.getElementById('document_3').value.length));
    
    }
    function validar2() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("boton_enviar").disabled = !(( document.getElementById('cita_d').value.length  )&& (document.getElementById('fecha').value.length)&& (document.getElementById('document_8').value.length));
    
    }
    function validar3() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("boton_enviar").disabled = !(( document.getElementById('cita_d').value.length  )&& (document.getElementById('fecha').value.length)&& (document.getElementById('document_9').value.length)&& (document.getElementById('document_10').value.length)&& (document.getElementById('document_11').value.length));
    
    }
</script>

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
        @if ($requisito->id < 4)
        <input type="file" id="document_{{$requisito->id}}" onInput="validar()" class="form-control document" name="documento" multiple>
       @endif
       @if ($requisito->id == 8)
       <input type="file" id="document_{{$requisito->id}}" onInput="validar2()" class="form-control document" name="documento" multiple>
      @endif
      @if ($requisito->id > 8)
      <input type="file" id="document_{{$requisito->id}}" onInput="validar3()" class="form-control document" name="documento" multiple>
     @endif
       
        @endforeach 
        {{-- <button type="submit" class="btn btn-primary my-4">SUBIR</button> --}}
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
                        <input type='date' id="cita_d"   class="form-control validarInput" name ="cita"/>
                        <input type="datetime-local" id="fecha"  name="fecha_recepcion">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>         
                <input type="submit" id="boton_enviar" disabled value="Enviar">
            </form>          

    </div>
  
    </div>
    </div>
    <td><a href="/egresado" class="btn btn-warning">Regresar</a></td>
    </div>

</body>
</html>