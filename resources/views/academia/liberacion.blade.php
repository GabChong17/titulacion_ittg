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
        <h2><p style="text-align:center; color: #140303;">Egresado</p></h2>
                  <table id="usuarios" class="table table-striped ">
                  <thead class= "bg-primary text-white">
            <tr >
                <th>Estado</th>
                <th>NoControl</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Descarga documentos</th>
                <th>Cita</th>
                
            </tr>
          </thead>
            <tr>
                <td data-th="Estado">{{ Auth::user()->estado }} </td>
                <td data-th="NoControl">{{ Auth::user()->NoControl }}</td>
                <td data-th="Nombre">{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</td>
                <td data-th="Carrera">{{ Auth::user()->carrera }}</td>
              
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
                          <p style="color: #140303;">
                          
                              <h4>Nombre: </h4> {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}<br>
                              

                              <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                                  <tr style="color: #190D47;">
                                      <td>PDF Autorizacion</td>
                                      <td>Respuesta Integracion Jurado</td>
                                      <td>Acto recepcional</td>
                                      <td>Hora acto</td>
                                      <td>Certificado</td>
                                  </tr>
                                  <tr style="color: #190D47;">
                                   <td><a target="_tab" href="/imprimir_solicitud_autorizacion/{{ Auth::user()->id }}" class=" btn btn-info"><i class=" fas fa-scroll"></a></td>
                                   <td><a target="_tab" href="/imprimir_respuesta_integracion_jurado/{{ Auth::user()->id }}" class=" btn btn-info"><i class=" fas fa-scroll"></a></td>
                                   <td><a target="_tab" href="/imprimir_aviso_de_acto/{{ Auth::user()->id }}" class=" btn btn-info"><i class=" fas fa-scroll"></a></td>
                                    <td><a target="_tab" href="/imprimir_aviso_de_hora_actoRecep/{{ Auth::user()->id }}" class=" btn btn-info"><i class=" fas fa-scroll"></a></td>
                                    <td><a target="_tab" href="/imprimir_certificado/{{ Auth::user()->id }}" class=" btn btn-info"><i class=" fas fa-scroll"></i></a> </td>
                                  </tr>
                              </table>  
                          </p> 
                        {{-- footer de la ventana --}}
                        <div class="modal-footer">
                          
                          <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          
                        </div>
                      </div>
                    </div>                      
                  </div>     
            </td> 
            @foreach ($tramites as $tramite)
            <td data-th="Cita">{{$tramite->cita}}</td>
        @endforeach
            </tr>
            
        </table>  
{{-- subida protocolo --}}
@foreach($sube_protocolo as $alumno)
        <table id="usuarios" class="table table-striped ">
          <thead class= "bg-primary text-white">
    <tr >
        <th>Sube Protocolo</th>        
    </tr>
  </thead>
    <tr>              
        <td>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#protocolo-modal">
                <i class="fas fa-upload"></I>
              </button>
              {{-- modal de protocolo --}}
              <div class="modal fade" id="protocolo-modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    {{-- header de la ventana --}}
                    <div class="modal-header">
                      <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                    </div>
                    {{-- contenido de la vetana --}}
                    <div class="modal-body">
                      <p style="color: #140303;">
                      
                          <h4>Nombre: </h4> {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}<br>
                          Sube el documento de tu protocolo
                          

                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header"></div>
                        
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
                                    <form action="/protocolo_egresado/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    Protocolo:
                                    <br>
                                    
                                    <input type="file" id="protocolo" onInput="validar()" class="form-control document" name="protocolo" multiple required>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                      </p>
                    
                      
                    {{-- footer de la ventana --}}
                    <div class="modal-footer">
                      <input type="submit" value="Guardar" class="btn btn-success" multiple required>
                      <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </form>
                    </div>
                  </div>
                </div>                      
              </div>
        </td>        
    </tr>
    
</table>  
@endforeach
{{-- sube boucher --}}
@foreach($sube_boucher as $alumno)
<table id="usuarios" class="table table-striped ">
  <thead class= "bg-primary text-white">
  <tr >
      <th>Boucher de Pago</th>
  </tr>
</thead>
  <tr>
        <td colspan="4">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#pago-modal">
              <i class="fas fa-file-invoice-dollar"></I>
            </button>
            {{-- modal de boucher --}}
            <div class="modal fade" id="pago-modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  {{-- header de la ventana --}}
                  <div class="modal-header">
                    <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                  </div>
                  {{-- contenido de la vetana --}}
                  <div class="modal-body">
                    <p style="color: #140303;">
                    
                        <h4>Nombre: </h4> {{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}<br>
                        Sube tu comprobante de pago
                        

                        <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-header"></div>
                      
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
                                  <form action="/baucher_pago/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data" multiple required>
                                  @csrf
                                  
                                  Boucher PDF:
                                  <br>
                                  <input type="file" id="boucher" onInput="validar()" class="form-control document" name="boucher" multiple required>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                    </p>
                  
                    
                  {{-- footer de la ventana --}}
                  <div class="modal-footer">
                    <input type="submit" value="Guardar" class="btn btn-success">
                    <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </form>
                  </div>
                </div>
              </div>                      
            </div>
        </td> 

  </tr>
</table>  
@endforeach
      </div>
    </div>  
</p>

</div>

        
    @endsection
    {{-- @section('js')        
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
    
  @endsection --}}
