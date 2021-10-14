@extends('admin.users.index')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
      <h2><p style="text-align:center; color: #140303;">Empleados</p></h2>
      <a href="/agregaUsers" class="btn btn-info"> Agregar Empleados</a><br>
                <table id="usuarios" class="table table-striped ">
                <thead class= "bg-primary text-white">
                    <tr>
                        
                        <th>Nombre</th>
                        {{-- <th>Profesion</th> --}}
                        <th>Carrera</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Departamento</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
  
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        
                        <td>{{$admin['name']}} {{$admin['a_paterno']}} {{$admin['a_materno']}}</td>
                        {{-- <td>{{$admin['profesion']}}</td>  --}}
                        <td>{{$admin['carrera']}}</td>
                        <td>{{$admin['email']}}</td>
                        <td>{{$admin['telefono']}}</td>
                        <td>{{$admin['rol']}}</td>
                        
                        <td>
                          <a href="/editarEmpleado/{{$admin->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                          <form action="{{ route('eliminarEmpleado', $admin->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar al usuario?')">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                <i class="fas fa-user-times "></i>
                                </button>
                            </form>
                        </td> 
                    </tr>
                  @endforeach
                  @foreach($divisiones as $divison)
                  <tr>
                      
                      <td>{{$divison['name']}} {{$divison['a_paterno']}} {{$divison['a_materno']}}</td>
                      {{-- <td>{{$divison['profesion']}}</td> --}}
                      <td>{{$divison['carrera']}}</td>
                      <td>{{$divison['email']}}</td>
                      <td>{{$divison['telefono']}}</td>
                      <td>{{$divison['rol']}}</td>
                      
                      <td>
                        <a href="/editarEmpleado/{{$divison->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                        <form action="{{ route('eliminarEmpleado', $divison->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar al usuario?')">
                          @csrf
                          @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                              <i class="fas fa-user-times "></i>
                              </button>
                          </form>
                      </td> 
                  </tr>
                @endforeach
                @foreach($jefaturas as $jefatura)
                  <tr>
                      
                      <td>{{$jefatura['name']}} {{$jefatura['a_paterno']}} {{$jefatura['a_materno']}}</td>
                      {{-- <td>{{$jefatura['profesion']}}</td> --}}
                      <td>{{$jefatura['carrera']}}</td>
                      <td>{{$jefatura['email']}}</td>
                      <td>{{$jefatura['telefono']}}</td>
                      <td>{{$jefatura['rol']}}</td>
                      
                      <td>
                        <a href="/editarEmpleado/{{$jefatura->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                        <form action="{{ route('eliminarEmpleado', $jefatura->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar al usuario?')">
                          @csrf
                          @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                              <i class="fas fa-user-times "></i>
                              </button>
                          </form>
                      </td> 
                  </tr>
                @endforeach
                @foreach($academias as $academia)
                  <tr>
                     
                      <td>{{$academia['name']}} {{$academia['a_paterno']}} {{$academia['a_materno']}}</td>
                      {{-- <td>{{$academia['profesion']}}</td> --}}
                      <td>{{$academia['carrera']}}</td>
                      <td>{{$academia['email']}}</td>
                      <td>{{$academia['telefono']}}</td>
                      <td>{{$academia['rol']}}</td>
                      
                      <td>
                        <a href="/editarEmpleado/{{$academia->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                        <form action="{{ route('eliminarEmpleado', $academia->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar al usuario?')">
                          @csrf
                          @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                              <i class="fas fa-user-times "></i>
                              </button>
                          </form>
                      </td> 
                  </tr>
                @endforeach
                @foreach($escolaress as $escolares)
                  <tr>
                      
                      <td>{{$escolares['name']}} {{$escolares['a_paterno']}} {{$escolares['a_materno']}}</td>
                      {{-- <td>{{$escolares['profesion']}}</td> --}}
                      <td>{{$escolares['carrera']}}</td>
                      <td>{{$escolares['email']}}</td>
                      <td>{{$escolares['telefono']}}</td>
                      <td>{{$escolares['rol']}}</td>
                      
                      <td>
                        <a href="/editarEmpleado/{{$escolares->id}}" class=" btn btn-info"><i class="fas fa-user-edit"></i></a>      
                        <form action="{{ route('eliminarEmpleado', $escolares->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar al usuario?')">
                          @csrf
                          @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                              <i class="fas fa-user-times "></i>
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