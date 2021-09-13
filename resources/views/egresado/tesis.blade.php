@extends('dashboard')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')

    <div class="contenedor-titulo">
        <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
        <h2 style="padding: 50px 30px;">Tesis para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>
    <script>
        var documentos_subidos=false;

        function validar() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length));
    if( !document.getElementById("subir").disabled)
    {
        documentos_subidos=true;
        console.log("documentos_subidos"); 

    }
    }
    function validar2() {
    console.log( "va= "+documentos_subidos); 
    if(documentos_subidos)
    {
    document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length) &&(document.getElementById('subir').disabled));
    }
    }

</script>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Egresado</p></h2>
              <table id="usuarios" class="table table-striped ">
              <thead class= "bg-primary text-white">

           
                <tr>
                    <th>1. Intrucciones</th>
                    <th>2. Sube tus requisitos</th>
                    <th>3. Tema</th>
                    <th>4. Agenda tu cita</th>
                </tr>
              </thead>
                <tr>
                <td>
                    <p style="text-align:center;">A continuacion te solicitamos anexes los documentos que se te solicitan: </p>
                </td>
                <td>
                  <center> 
                    {{-- ingresar documentos PDF --}}
                    <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>

                    <br>
                    <div class="col-md-4 text-center font-weight-bold">
                        
                        
                        </div>
                        <form method="POST" action="/documento" enctype="multipart/form-data"> 
                            @csrf
                        <p style="text-align:center;">Documento 1: </p>
                        <input type="file" id="documento1" onInput="validar()" class="form-control document" name="documento" multiple>
                        <br>
                        <p style="text-align:center;">Documento 2: </p>
                        <input type="file" id="documento2" onInput="validar()" class="form-control document" name="documento" multiple>
                        <br>
                        <p style="text-align:center;">Documento 3: </p>
                        <input type="file" id="documento3" onInput="validar()" class="form-control document" name="documento" multiple>
                     
                      </p>
                      <button  style="background-color: #384085;" type="submit" class="btn btn-primary" id="subir"  >Subir</button>
                        </form>
                  </center>
                </td>
                <td>
                  <center>
                    {{-- inegresar valor para el titulo --}}
                    <div class="card-header">Ingresa el titulo de tu tema:</div>
                                
                                          @if ($errors->any())
                                          <div class="alert alert-danger">
                                            <ul>
                                              @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              @endforeach
                                            </ul>
                                          </div>
                                          @endif
                              
                                          <div class="card-body">
                                            <form action="/titulo" method="post" enctype="multipart/form-data">
                                            @csrf
                                            Tema:
                                            <br>
                                            <input type="text" name="titulo" class="form-control"><br>
                                            <input type="submit" style="background-color: #384085;" id="titulo" class="btn btn-primary" value="Asignar">
                                            </form>
                  </center>             
                </td> 
                <td>
                  <center>
                    {{-- agendar la cita --}}
                    <div class="card-header">Seleccione una fecha:</div><br><br>
                      <form method="POST" action="/crearCita" enctype="multipart/form-data" > 
                        @csrf
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type="datetime-local" id="cita" onInput="validar2()" name="cita">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>  
                    
                        <input type="submit" style="background-color: #384085;" id="cita"  class="btn btn-primary" value="Enviar">
                                                    
                    </form>
                  </center>
                </td>                                            
                </tr>
                
            </table>  
        </div>
    </div> 

  

 

     

        
    @endsection
    @section('js')        
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
  
    <script>
      $(document).ready(function() {
  $('#usuarios').DataTable({
    "lengthMenu":[[5,7,10,25,50,-1], [5,7,10,25,50,"all"]]
  });
  });
    </script>
    
  @endsection



    