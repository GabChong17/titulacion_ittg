@extends('admin.users.index')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection
@section('content')
<div class="card">
    <div class="card-body">
      <h2><p style="text-align:center; color: #140303;">Empleados</p></h2>
                <table id="usuarios" class="table table-striped ">
                <thead class= "bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        {{-- <th>Apellido Paterno</th> --}}
                        {{-- <th>Apellido Materno</th> --}}
                        <th>Departamento</th>
                        <th>Carrera</th>
                        {{-- <th>Campus</th> --}}
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Roles</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
  
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        {{-- <td>{{$user['a_paterno']}}</td> --}}
                        {{-- <td>{{$user['a_materno']}}</td> --}}
                        <td>{{$user['departamento']}}</td>
                        <td>{{$user['carrera']}}</td>
                        {{-- <td>{{$user['campus']}}</td> --}}
                        <td>{{$user['email']}}</td>
                        <td>{{$user['telefono']}}</td>
                        <td>{{$user['roles']}}</td>
                        
                        <td>
                            {{-- modal de edit --}}
                    <a href="#edit" class="fas fa-th-large" data-toggle="modal"></a>                          
                    <div class="modal fade" id="edit">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          {{-- header de la ventana --}}
                          <div class="modal-header">
                            <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align:center; color: #8F362C;">.</h4>
                          </div>
                          {{-- contenido de la vetana --}}
                          <div class="modal-body">
                            <p style="text-align:center; color: #140303;">
                            
                            modal


                            </p>
                           
                            
                          {{-- footer de la ventana --}}
                          <div class="modal-footer">
                            <button tyle="button" class="btn btn-primary">.</button>
                            <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            
                          </div>
                        </div>
                      </div>                      
                    </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                  <tr>
                    <td colspan="2">Division de estudios</td>
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
  $('#usuarios').DataTable({
    "lengthMenu":[[5,7,10,25,50,-1], [5,7,10,25,50,"all"]]
  });
  });
    </script>
    
  @endsection