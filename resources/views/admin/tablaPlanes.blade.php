@extends('admin.users.index')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
      <h2><p style="text-align:center; color: #140303;">Planes de Estudios</p></h2>
      <a href="/opcionesPlan" class="btn btn-info"> Opciones de planes </a>
      <a href="/agregaPlan" class="btn btn-info"> Agregar Plan</a>
     <br><br>   
                <table id="usuarios" class="table table-striped ">
                <thead class= "bg-primary text-white">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
  
                <tbody>
                    @foreach($Planes as $plan)
                    <tr>
                        <td>{{$plan['id']}}</td>
                        <td>{{$plan['Nombre']}} </td>
                        {{-- <td>{{$admin['profesion']}}</td>  --}}
                        <td>
                          <a href="/editarPlan/{{$plan->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                          
                          <form action="{{ route('eliminarPlan', $plan->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar Plan?')">
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