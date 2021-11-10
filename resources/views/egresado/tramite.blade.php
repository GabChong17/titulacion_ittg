@extends('dashboard')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')

@if ($isAdmin == 1)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;">Tesis Profesional.</h2><br>
      <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>


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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite1" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
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
@elseif ($isAdmin == 2)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;">Elaboracion de texto o prototipo didactico.</h2><br>
      <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite2" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
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
    
@elseif ($isAdmin == 3)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;">Proyecto de investigacion.</h2><br>
      <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite3" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
                                <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                                <br>
                                <p style="text-align:center;">Carta del asesor: </p>
                                <input type="file" id="documento4" onInput="validar()"  name="requisito4" multiple>
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
        <script>
                      var documentos_subidos=false;
              
                      function validar() {
                  console.log( !document.getElementById('cita_d').value.length); 
                  document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length)&&(document.getElementById('documento4').value.length));
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
                  document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length)&&(document.getElementById('subir').disabled));
                  }
                  }
              
        </script>


@elseif ($isAdmin == 4)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Diseño o rediseño de equipo, aparato o maquinaria.</h2><br>
      <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite4" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
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
    {{-- ya no --}}
{{-- @elseif ($isAdmin == 5)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Curso especial de titulación. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div> --}}
@elseif ($isAdmin == 6)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Examen global por areas del conocimiento. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite6" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Constancia del examen CENEVAL: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
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
        <script>
                      var documentos_subidos=false;
              
                      function validar() {
                  console.log( !document.getElementById('cita_d').value.length); 
                  document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length));
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
                  document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length)&&(document.getElementById('subir').disabled));
                  }
                  }
              
        </script>
@elseif ($isAdmin == 7)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Memoria de experiencia profesional. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite7" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
                                <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                                <br>
                                <p style="text-align:center;">Curriculum vitae: </p>
                                <input type="file" id="documento4" onInput="validar()"  name="requisito4" multiple>
                                <br>
                                <p style="text-align:center;">Constancia: </p>
                                <input type="file" id="documento5" onInput="validar()"  name="requisito5" multiple>
                                <br>
                                <p style="text-align:center;">Carta del asesor: </p>
                                <input type="file" id="documento6" onInput="validar()"  name="requisito6" multiple>
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
        <script>
                      var documentos_subidos=false;
              
                      function validar() {
                  console.log( !document.getElementById('cita_d').value.length); 
                  document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length)&&(document.getElementById('documento4').value.length)&&(document.getElementById('documento5').value.length)&&(document.getElementById('documento6').value.length));
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
                  document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length)&&(document.getElementById('subir').disabled));
                  }
                  }
              
        </script>

@elseif ($isAdmin == 8)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Escolaridad por promedio. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite8" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Promedio: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Solicitud llenada: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Certificado: </p>
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
@elseif ($isAdmin == 9)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Escolaridad por estudios de posgrado. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite9" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Constancia (40%): </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Plan de estudios: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Revoe: </p>
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
@elseif ($isAdmin == 10)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;"> Memoria de residencia profesional. </h2><br>
      <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite10" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
                                <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                                <br>
                                <p style="text-align:center;">Carta del asesor: </p>
                                <input type="file" id="documento4" onInput="validar()"  name="requisito4" multiple>
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

  <script>
          var documentos_subidos=false;
          function validar() {
      console.log( !document.getElementById('cita_d').value.length); 
      document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length)&&(document.getElementById('documento4').value.length));
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
 @elseif ($isAdmin == 11)
  <div class="contenedor-titulo">
    <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
    <h2 style="padding: 50px 30px;">Tesis Profesional.</h2><br>
    <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
  </div>


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
            <tr>
            <td>
            <br><br><br>
              
  
              
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
                      <form method="POST" action="/tramite11" enctype="multipart/form-data"> 
                          @csrf
  
                          <div class="row">
                            
                            <div class="col-md-6 mb-3">
                              <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                             <br>
                              <p style="text-align:center;">Objetivo: </p>
                              <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                              <br>
                              <p style="text-align:center;">Indice: </p>
                              <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                              <br>
                              <p style="text-align:center;">Bibliografia: </p>
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
@elseif ($isAdmin == 12)
    <div class="contenedor-titulo">
      <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
      <h2 style="padding: 50px 30px;">Proyecto de investigacion.</h2><br>
      <h2 style="padding: 50px 30px;">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
    </div>

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
              <tr>
              <td>
              <br><br><br>
                
    
                
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
                        <form method="POST" action="/tramite12" enctype="multipart/form-data"> 
                            @csrf
    
                            <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                               <br>
                                <p style="text-align:center;">Objetivo: </p>
                                <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                <br>
                                <p style="text-align:center;">Indice: </p>
                                <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                <br>
                                <p style="text-align:center;">Bibliografia: </p>
                                <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                                <br>
                                <p style="text-align:center;">Carta del asesor: </p>
                                <input type="file" id="documento4" onInput="validar()"  name="requisito4" multiple>
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
        <script>
                      var documentos_subidos=false;
              
                      function validar() {
                  console.log( !document.getElementById('cita_d').value.length); 
                  document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length)&&(document.getElementById('documento4').value.length));
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
                  document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length)&&(document.getElementById('subir').disabled));
                  }
                  }
              
        </script>
@elseif ($isAdmin == 13)
        <div class="contenedor-titulo">
          <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
          <h2 style="padding: 50px 30px;"> Examen global por areas del conocimiento. </h2><br>
          <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
        </div>
    
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
                  <tr>
                  <td>
                  <br><br><br>
                    
        
                    
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
                            <form method="POST" action="/tramite13" enctype="multipart/form-data"> 
                                @csrf
        
                                <div class="row">
                                  
                                  <div class="col-md-6 mb-3">
                                    <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                                   <br>
                                    <p style="text-align:center;">Constancia del examen CENEVAL: </p>
                                    <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                    <br>
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
            <script>
                          var documentos_subidos=false;
                  
                          function validar() {
                      console.log( !document.getElementById('cita_d').value.length); 
                      document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length));
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
                      document.getElementById("boton_enviar").disabled = !((document.getElementById('cita_d').value.length)&& (document.getElementById('fecha').value.length)&&(document.getElementById('subir').disabled));
                      }
                      }
                  
            </script>
@elseif ($isAdmin == 14)
            <div class="contenedor-titulo">
              <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
              <h2 style="padding: 50px 30px;"> Escolaridad por promedio. </h2><br>
              <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
            </div>
        
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
                      <tr>
                      <td>
                      <br><br><br>
                        
            
                        
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
                                <form method="POST" action="/tramite14" enctype="multipart/form-data"> 
                                    @csrf
            
                                    <div class="row">
                                      
                                      <div class="col-md-6 mb-3">
                                        <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                                       <br>
                                        <p style="text-align:center;">Promedio: </p>
                                        <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                                        <br>
                                        <p style="text-align:center;">Solicitud llenada: </p>
                                        <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                                        <br>
                                        <p style="text-align:center;">Certificado: </p>
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
@elseif ($isAdmin == 15)
  <div class="contenedor-titulo">
    <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
    <h2 style="padding: 50px 30px;"> Memoria de residencia profesional. </h2><br>
    <h2 style="padding: 50px 30px;">Texto para: {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</h2>
  </div>

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
            <tr>
            <td>
            <br><br><br>
              
  
              
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
                      <form method="POST" action="/tramite15" enctype="multipart/form-data"> 
                          @csrf
  
                          <div class="row">
                            
                            <div class="col-md-6 mb-3">
                              <p style="text-align:center; color: #190D47;">Agrega documento PDF:</p>
                             <br>
                              <p style="text-align:center;">Objetivo: </p>
                              <input type="file" id="documento1" onInput="validar()"  name="requisito1" multiple>
                              <br>
                              <p style="text-align:center;">Indice: </p>
                              <input type="file" id="documento2" onInput="validar()"  name="requisito2" multiple>
                              <br>
                              <p style="text-align:center;">Bibliografia: </p>
                              <input type="file" id="documento3" onInput="validar()"  name="requisito3" multiple>
                              <br>
                              <p style="text-align:center;">Carta del asesor: </p>
                              <input type="file" id="documento4" onInput="validar()"  name="requisito4" multiple>
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

<script>
        var documentos_subidos=false;
        function validar() {
    console.log( !document.getElementById('cita_d').value.length); 
    document.getElementById("subir").disabled = !((document.getElementById('documento1').value.length)&&(document.getElementById('documento2').value.length)&&(document.getElementById('documento3').value.length)&&(document.getElementById('documento4').value.length));
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
@else
    
@endif
    

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



        
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



    