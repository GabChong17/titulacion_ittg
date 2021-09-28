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
                        <th>Profesion</th>
                        <th>Cedula</th>
                        <th>Carrera</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Roles</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
  
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin['id']}}</td>
                        <td>{{$admin['name']}}</td>
                        <td>{{$admin['profesion']}}</td> 
                        <td>{{$admin['cedula']}}</td> 
                        <td>{{$admin['carrera']}}</td>
                        <td>{{$admin['email']}}</td>
                        <td>{{$admin['telefono']}}</td>
                        <td>{{$admin['rol']}}</td>
                        
                        <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                            <i class="fas fa-th-large"></I>
                          </button>
                        </td>
                    </tr>
                  @endforeach
                  @foreach($divisiones as $divison)
                  <tr>
                      <td>{{$divison['id']}}</td>
                      <td>{{$divison['name']}}</td>
                      <td>{{$divison['profesion']}}</td>
                      <td>{{$divison['cedula']}}</td>
                      <td>{{$divison['carrera']}}</td>
                      <td>{{$divison['email']}}</td>
                      <td>{{$divison['telefono']}}</td>
                      <td>{{$divison['rol']}}</td>
                      
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                          <i class="fas fa-th-large"></I>
                        </button>
                      </td> 
                  </tr>
                @endforeach
                @foreach($jefaturas as $jefatura)
                  <tr>
                      <td>{{$jefatura['id']}}</td>
                      <td>{{$jefatura['name']}}</td>
                      <td>{{$jefatura['profesion']}}</td>
                      <td>{{$jefatura['cedula']}}</td>
                      <td>{{$jefatura['carrera']}}</td>
                      <td>{{$jefatura['email']}}</td>
                      <td>{{$jefatura['telefono']}}</td>
                      <td>{{$jefatura['rol']}}</td>
                      
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                          <i class="fas fa-th-large"></I>
                        </button>
                      </td> 
                  </tr>
                @endforeach
                @foreach($academias as $academia)
                  <tr>
                      <td>{{$academia['id']}}</td>
                      <td>{{$academia['name']}}</td>
                      <td>{{$academia['profesion']}}</td>
                      <td>{{$academia['cedula']}}</td>
                      <td>{{$academia['carrera']}}</td>
                      <td>{{$academia['email']}}</td>
                      <td>{{$academia['telefono']}}</td>
                      <td>{{$academia['rol']}}</td>
                      
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                          <i class="fas fa-th-large"></I>
                        </button>
                      </td> 
                  </tr>
                @endforeach
                @foreach($escolaress as $escolares)
                  <tr>
                      <td>{{$escolares['id']}}</td>
                      <td>{{$escolares['name']}}</td>
                      <td>{{$escolares['profesion']}}</td>
                      <td>{{$escolares['cedula']}}</td>
                      <td>{{$escolares['carrera']}}</td>
                      <td>{{$escolares['email']}}</td>
                      <td>{{$escolares['telefono']}}</td>
                      <td>{{$escolares['rol']}}</td>
                      
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                          <i class="fas fa-th-large"></I>
                        </button>
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

          {{-- modal de edit --}}

          <div class="modal fade" id="edit-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                {{-- header de la ventana --}}
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title" align="center"><b>Informacion del empleado.</b></h4>
                </div>
                {{-- contenido de la vetana --}}
                
                
                    {{-- footer de la ventana --}}
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">.</button>
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
  $('#usuarios').DataTable({
    "lengthMenu":[[5,7,10,25,50,-1], [5,7,10,25,50,"all"]]
  });
  });
    </script>
    
  @endsection