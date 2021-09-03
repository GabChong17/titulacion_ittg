@extends('dashboard')
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
      <h2><p style="text-align:center; color: #140303;"></p></h2>
            <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                <tr style="color: #190D47;">
                    <td><h3>1. Intrucciones</td>
                    <td><h3>2. Sube tus requisitos</td>
                    <td><h3>3. Agenda tu cita</td>
                    <td><h3>3. Tema</td>
                </tr>
                
                <tr style="color: #190D47;">
                <td>
                    <p style="text-align:center; color: #190D47;">A continuacion te solicitamos anexes los documentos que se te solicitan</p>
                </td>
                <td>
                    {{-- modal de documentos del egresado --}}
                    <a href="#documentos" class="fas fa-upload" data-toggle="modal"></a>                          
                    <div class="modal fade" id="documentos">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              {{-- header de la ventana --}}
                              <div class="modal-header">
                                <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Sube tus requisitos.</h4>
                              </div>
                              {{-- contenido de la vetana --}}
                                <p style="text-align:center; color: #190D47;"></p>
                                <label for="documento">Agrega documento PDF para </label>
                                <br>
                                <div class="col-md-4 text-center font-weight-bold">
                                    
                                    
                                    </div>
                                    <form method="POST" action="/documento" enctype="multipart/form-data"> 
                                        @csrf
                                    
                                       
                                    
                            
                                    
                                    <input type="file" id="documento1" onInput="validar()" class="form-control document" name="documento" multiple>
                                    <br>
                                    <input type="file" id="documento2" onInput="validar()" class="form-control document" name="documento" multiple>
                                    <br>
                                    <input type="file" id="documento3" onInput="validar()" class="form-control document" name="documento" multiple>
                                 
                                  </p>
                                    
                                  <button  style="background-color: #384085;" type="submit" id="subir" disabled >Subir</button>
                                
                              {{-- footer de la ventana --}}
                              <div class="modal-footer">
                                
                                <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                
                              </div>
                            </div>
                          </div>                      
                        </div>
                </td>
                <td>
                    {{-- modal de cita agendada --}}
                    <a href="#cita" class=" fas fa-user-clock" data-toggle="modal"></a>                          
                    <div class="modal fade" id="cita">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                {{-- header de la ventana --}}
                                <div class="modal-header">
                                  <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                                </div>
                                {{-- contenido de la vetana --}}
                                
                                        <form method="POST" action="/crearCita" enctype="multipart/form-data"> 
                                            @csrf
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                     <input type="datetime-local" id="cita_d" onInput="validar2()" name="cita">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>         
                                            <br>
                                            <input type="submit" id="boton_enviar"  value="Enviar">
                                            
                                        </form>
                                
                                  
                                {{-- footer de la ventana --}}
                                <div class="modal-footer">
                                  
                                  <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  
                                </div>
                              </div>
                            </div>                      
                          </div>
                </td> 
                <td>
                    {{-- modal de tema del proyecto --}}
                    <a href="#titulo" class="fas fa-book" data-toggle="modal"></a>                          
                    <div class="modal fade" id="titulo">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                {{-- header de la ventana --}}
                                <div class="modal-header">
                                  <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                                </div>
                                {{-- contenido de la vetana --}}
                                <p style="text-align:center; color: #190D47;">Ingresa el titulo que llevaria tu Tesis:</p>                                      
                                
                                  
                                {{-- footer de la ventana --}}
                                <div class="modal-footer">
                                  
                                  <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  
                                </div>
                              </div>
                            </div>                      
                          </div>
                </td>                                            
                </tr>
                
            </table>  
        </div>
    </div> 


        
    @endsection
