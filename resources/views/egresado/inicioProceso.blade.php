@extends('dashboard')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')

   <br><br>
    <center>
   <p style="text-align:center; color: #190D47;" >

    <div class="card">
      <div class="card-body">
        <h2><p style="text-align:center; color: #140303;">Documentación</p></h2>
                  <table id="usuarios" class="table table-striped ">
                  <thead class= "bg-primary text-white">
            <tr >
                <th>Estado</th>
                <th>Nombre</th>
                <th>Indicaciones</th>
                <th>Sube documentos</th>
                
            </tr>
          </thead>
            <tr>
                <td data-th="Estado">{{ Auth::user()->estado }} </td>
                <td data-th="Nombre">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</td>
                <td data-th="Indicaciones">A continuacion te solicitamos anexes la siguiente documentacion:</td>
              
                <td>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#documentos-modal">
                    <i class="fas fa-cloud-download-alt"></I>
                  </button>
                  {{-- modal de documentos --}}
                  <div class="modal fade" id="documentos-modal" size="xl">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        {{-- header de la ventana --}}
                        <div class="modal-header">
                          <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                        </div>
                        {{-- contenido de la vetana --}}
                        <div class="modal-body">
                            <form method="POST" action="/documentoInicio/{{ Auth::user()->id }}" enctype="multipart/form-data"> 
                                @csrf
                          <p style="color: #140303;">
                              <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                                  
                                <tr style="color: #190D47;"> 
                                    <th><p style="text-align:center;">CERTIFICADO DE ESTUDIOS PROFESIONAL</p>
                                    <input type="file" id="documentoInicio1" onInput="validar()"  name="documentoInicio1" multiple><br><br></th>
                                <tr style="color: #190D47;"> 
                                </tr>                                      
                                    <th><p style="text-align:center;">CONSTANCIA DE SERVICIO SOCIAL</p>
                                    <input type="file" id="documentoInicio2" onInput="validar()"  name="documentoInicio2" multiple><br><br></th>
                                <tr style="color: #190D47;"> 
                                </tr>        
                                    <th><p style="text-align:center;">CONSTANCIA DE ACREDITACION DEL IDIOMA INGLES Y ACTA DE APROBACION DEL CURSO O EXAMEN</p>
                                    <input type="file" id="documentoInicio3" onInput="validar()"  name="documentoInicio3" multiple><br><br></th>
                                <tr style="color: #190D47;"> 
                                </tr>           
                                    <th><p style="text-align:center;">CONSTANCIA DE PRACTICAS PROFESIONALES</p>
                                    <input type="file" id="documentoInicio4" onInput="validar()"  name="documentoInicio4" multiple>
                                </tr>
                              </table>  
                          </p> 
                        {{-- footer de la ventana --}}
                        <div class="modal-footer">
                          <button  style="background-color: #384085;" type="submit" class="btn btn-primary" id="subir" >Subir</button>
                          <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>

                      </div>
                    </div>                      
                  </div>     
            </td>        
            </tr>
            
        </table>  


      </div>
    </div>  
</p>

</div>

        
    @endsection
    
