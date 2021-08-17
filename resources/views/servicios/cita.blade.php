
@extends('admin.escolares')
    @section('content')

    <div class="contenedor-titulo">

       <h2 style="padding: 50px 30px;">Cita egresado</h2>
      
       <div class="col-md-4 text-center font-weight-bold">
        <div class="row text-center text-primary">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #fff;">3- AGENDA TU CITA</p>
                </div>
        </div>  
       <div class="row my-4">
            <form method="POST" action="/agendarCita" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        {{-- <input type='date' id="cita_d"  onInput="validar2()" class="form-control validarInput" name ="cita"/> --}}
                        <input type="datetime-local" id="fecha2" onInput="validar2()" name="cita_servicios">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>         
                <br>
                <input type="submit" id="boton_enviar"  value="Enviar">
                
            </form>  
    
    </div>
    @endsection

    