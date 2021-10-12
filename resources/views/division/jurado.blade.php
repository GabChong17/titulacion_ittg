@extends('admin.division')     
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Integracion Jurado</p></h2>
              <table id="usuarios" class="table table-striped ">
              <thead class= "bg-primary text-white">
              <tr>
                {{-- <th>Estado</th> --}}
                <th>NC</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Acciones</th>                  
              </tr>
              </thead>

              <tbody>
              @foreach($users_jurado_asignado as $egresado)
                <tr>
                  {{-- <td>{{$egresado['estado']}}</td> --}}
                  <td>{{$egresado['NoControl']}}</td>
                  <td>{{$egresado['name']}} {{$egresado['a_paterno']}} {{$egresado['a_materno']}}</td>
                  <td>{{$egresado['carrera']}}</td>                                                       
                  <td>
                    <a href="/integracionJurado2/{{$egresado->id}}" class=" btn btn-info"><i class="fas fa-address-card"></i></a>                      
                  </td>    
                  </td>
                                         
                </tr>
                @endforeach
              </tbody>
                <tr>
                  {{-- <td colspan="2">Division de estudios</td> --}}
                  <td colspan="4"><a href="/notificacionEscolares" class=" fas fa-envelope btn btn-info">  Notificacion</a> </td>
                </tr>                      
            </table>  
          </div>
        </div>
        
        {{-- modal de vista de asesores --}}
        <div class="modal fade" id="asesores-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              {{-- header de la ventana --}}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" align="center"><b>Informacion del egresado.</b></h4>
              </div>
              {{-- contenido de la vetana --}}
            
              <h4>Nombre: </h4> {{ Auth::user()->name }}<br>
                    
      
                    <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                        <tr style="color: #190D47;">
                            <td>Asesor</td>
                            <td>Revisor</td>
                            <td>Revisor</td>
                        </tr>
                        <tr style="color: #190D47;">
                            <td>Asesor</td>
                            <td>Revisor 1</td>
                            <td>Revisor 2</td>
                        </tr>
      
                    </table>  
      
                </p>
                  {{-- footer de la ventana --}}
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                  </div>
                </form>
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
  $('#usuarios').DataTable( {
      "language": {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "Registro no encontrado",
          "info": "Mostrando la pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(Filtrado de _MAX_ registros totales)",
          'search': 'Buscar:',
          'paginate': {
            'next':'Siguiente',
            'previous': 'Anterior'
          }
          
      }
      
  } );
} );
  </script>
  
@endsection



