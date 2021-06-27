<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #fff;">
            {{ __('Proyecto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Tramite de Proyecto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}                </div>
            </div>
        </div>
    </div>
    
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
<div class="container">
    <br>
    <div class="row text-primary">
    <div class="col-md-4  font-weight-bold">     
        <div class=" text-center">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #fff;">1- INSTRUCCIONES </p>
                <br>
                <p style="text-align:center; color: #fff;">A continuacion te solicitamos anexes los documentos que se te solicitan</p>
            </div>
        </div>

    <div style=”text-align: justify;”>
        <ol>
        
    </ol>

    </div>
    </div> 

    <div class="col-md-4 text-center font-weight-bold">
        <div class=" text-center">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #fff;">2- SUBE TUS REQUISITOS </p>
                </div>
        </div>
        <form method="POST" action="/documento" enctype="multipart/form-data"> 
            @csrf
        
           
        <p style="text-align:center; color: #fff;">
        <label for="documento">Agrega documento PDF para </label>
        <br>
        <input type="file" id="" onInput="validar()" class="form-control document" name="documento" multiple>
        <br>
        <input type="file" id="" onInput="validar2()" class="form-control document" name="documento" multiple>
        <br>
        <input type="file" id="" onInput="validar3()" class="form-control document" name="documento" multiple>
     
      </p>
       <button type="submit" class="btn btn-primary my-4" style="color:#000; border: 1px solid #fff; padding: 5px 5px; background: #fff;">SUBIR</button> 
        </form>


    <div class="col-md-4 text-center font-weight-bold">
        <div class="row text-center text-primary">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p style="text-align:center; color: #fff;">3- AGENDA TU CITA</p>
                </div>
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
                <br>
                <input type="submit" id="boton_enviar" disabled value="Enviar">
                
            </form>   
            <br>
            <br>
    

     <div class="footer2 mx-auto px-4 sm:px-6 lg:px-8">
                    <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
                    <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
                </div>

</x-app-layout>
