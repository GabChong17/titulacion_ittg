@extends('admin.escolares')
   
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Liberar No Inconveniencia</p></h2>
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
              @foreach($users_documentos_revisados as $egresado)
                <tr>
                  {{-- <td>{{$egresado['estado']}}</td> --}}
                  <td>{{$egresado['NoControl']}}</td>
                  <td>{{$egresado['name']}} {{$egresado['a_paterno']}} {{$egresado['a_materno']}}</td>
                  <td>{{$egresado['carrera']}}</td>                                                           
                  <td>

                    
                    <a href="/LiberarNoInconveniencia/{{$egresado->id}}" class=" btn btn-info"><i class="fas fa-exclamation-circle"></i></a> 
                   
                  </td>                             
                </tr>
                @endforeach
              </tbody>
                <tr>
                  {{-- <td colspan="2">Servicios Escolares</td> --}}
                  <td colspan="4"><a href="/notificacionDivision" class=" fas fa-envelope btn btn-info">  Notificacion</a> </td>
                
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



