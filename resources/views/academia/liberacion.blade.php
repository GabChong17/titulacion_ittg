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
                <th>Cita</th>
                <th>Documentos</th>
            </tr>
          </thead>
            <tr>
                <td data-th="Estado">{{ Auth::user()->estado }} </td>
                <td data-th="NoControl">{{ Auth::user()->NoControl }}</td>
                <td data-th="Nombre">{{ Auth::user()->name }}</td>
                <td data-th="Carrera">{{ Auth::user()->carrera }}</td>
                @foreach ($tramites as $tramite)
                    <td data-th="Cita">{{$tramite->cita}}</td>
                @endforeach
                      
                <td >
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#documentos-modal">
                        <i class="fas fa-cloud-download-alt"></I>
                      </button>

                      {{-- modal de documentos --}}
                      <div class="modal fade" id="documentos-modal">
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
                              
                                  <h4>Nombre: </h4> {{ Auth::user()->name }}<br>
                                  

                                  <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                                      <tr style="color: #190D47;">
                                          <td>PDF Autorizacion</td>
                                          <td>Respuesta Integracion Jurado</td>
                                          <td>Acto recepcional</td>
                                          <td>Hora acto</td>
                                      </tr>
                                      <tr style="color: #190D47;">
                                       <td><a target="_tab" href="/imprimir_solicitud_autorizacion/{{ Auth::user()->id }}">Autorizacion</a></td>
                                       <td><a target="_tab" href="/imprimir_respuesta_integracion_jurado/{{ Auth::user()->id }}">Respues de Integracion.</a></td> 
                                       <td><a target="_tab" href="/imprimir_aviso_de_acto/{{ Auth::user()->id }}">Aviso de acto</a></td>
                                        <td><a target="_tab" href="/imprimir_aviso_de_hora_actoRecep/{{ Auth::user()->id }}">Aviso de hora y fecha</a></td>
                                          <td></td>
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
            </tr>
            
        </table>  
      </div>
    </div>  
</p>
<div class="button-25">
<input type="submit" id="subir"  value="Subir"></div>
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
