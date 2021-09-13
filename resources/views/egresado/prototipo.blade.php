@extends('dashboard')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')

    <div class="contenedor-titulo">
        <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
        <h2 style="padding: 50px 30px;">Prototipo para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
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
        <h2>
          <p style="text-align:center; color: #140303;">Egresado</p>
        </h2>
        <table id="usuarios" class="table table-striped ">
        <thead class= "bg-primary text-white">

      
          <tr>
              <th>1. Intrucciones</th>
              <th>2. Sube tus requisitos</th>
              
          </tr>
        </thead>
          <tr>
          <td>
              <p style="text-align:center;">A continuacion te solicitamos anexes los documentos que se te solicitan: </p>
          </td>
          <td>
            <center>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
              <i class="fas fa-upload"></I>
            </button>
            </center>
          </td>
                                                    
          </tr>
          
      </table>  
    </div>
  </div> 

  {{-- modal de documentos del egresado --}}
    <div class="modal fade " id="edit-modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          {{-- header de la ventana --}}
         
            <div class="card">
              <div class="card-header">
                <button   data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Sube tus requisitos.</h4>

              </div>

              <div class="card-body">
                  {{-- contenido de la vetana --}}
               
                <div class="col-md-4 text-center font-weight-bold">
                    
                    
                    </div>
                    <form method="POST" action="/tramite-prototipo" enctype="multipart/form-data"> 
                        @csrf

                        <div class="row">
                          
                          <div class="col-md-6 mb-3">
                            <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                           <br>
                            <p style="text-align:center;">Documento 1: </p>
                            <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                            <br>
                            <p style="text-align:center;">Documento 2: </p>
                            <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                            <br>
                            <p style="text-align:center;">Documento 3: </p>
                            <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                          </div>
                          <div class="col-md-6 mb-3">
                            <p style="text-align:center; color: #190D47;">Tema:</p>
                            <input id="tema" type="text" class="form-control" name="tema">
                            <br>
                            <p style="text-align:center; color: #190D47;">Agenda cita:</p>
                            <input type="datetime-local" id="cita_d"  class="form-control" onInput="validar2()" name="cita">
                          </div>

                        </div>
                  
                    

                   {{-- footer de la ventana --}}
                  <div class="modal-footer">
                    <button  style="background-color: #384085;" type="submit" class="btn btn-primary" id="subir" disabled >Subir</button>
                    <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    
                  </div>
                  </form>
              </div>
            </div>
            
          
        
                
              
            
         
        </div>
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



    