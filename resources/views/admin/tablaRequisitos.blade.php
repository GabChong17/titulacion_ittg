@extends('admin.users.index')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
      <h2><p style="text-align:center; color: #140303;">Tabla Requisitos</p></h2>
      <a href="/TablaPlanes" class="btn btn-info"> Tabla Planes</a>
      <a href="/opcionesPlan" class="btn btn-info"> Tabla Opciones</a>
      <a href="/agregaRequisitos" class="btn btn-info">Agrega Requisitos</a>
      <br><br>
      
                <table id="usuarios" class="table table-striped ">
                <thead class= "bg-primary text-white">
                    <tr>
                        <th>Plan</th>
                        <th>Opciones</th>
                        <th>Requisito</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
  
                <tbody>
                    @foreach($Requisitoso as $requisito)
                    <tr>
                        <td>{{$requisito->plan->Nombre}}</td>
                        <td>{{$requisito->opcion->Nombre}}</td>
                        <td>{{$requisito['Nombre']}} </td>
                        
                        {{-- <td>{{$admin['profesion']}}</td>  --}}
                        <td>
                          <form action="{{ route('eliminarRequisito', $requisito->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar este requisito?')">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td> 
                    </tr>
                  @endforeach
                </tbody>
                                     
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