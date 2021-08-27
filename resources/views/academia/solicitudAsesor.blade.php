@extends('admin.academia') 
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Solicitud de Asesor</p></h2>
              <table id="usuarios" class="table table-striped ">
              <thead class= "bg-primary text-white">
              <tr>
                <th>Estado</th>
                <th>NC</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Opcion</th>
                <th>Recepcion</th>
                <th>Acciones</th>                  
              </tr>
              </thead>

              <tbody>
              @foreach($egresado as $egresado)
                <tr>
                  <td>{{$egresado['estado']}}</td>
                  <td>{{$egresado['NoControl']}}</td>
                  <td>{{$egresado['name']}}</td>
                  <td>{{$egresado['carrera']}}</td>
                  <td>{{$egresado['planDeestudios']}}</td>                                                          
                  <td></td>                                                               
                  <td>
                    {{-- modal de solicitud de asesor --}} 
                    <a href="#aval" class="fas fa-th-large" data-toggle="modal"></a>                          
                    <div class="modal fade" id="aval">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          {{-- header de la ventana --}}
                          <div class="modal-header">
                            <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align:center; color: #8F362C;">Informacion del egresado.</h4>
                          </div>
                          {{-- contenido de la vetana --}}
                          <div class="modal-body">
                            <p style="text-align:; color: #140303;">
                              Nombre:<br>
                              Tema:<br>
                              Docuementos:
                            </p>
                            <p style="text-align:; color: #140303;">
                              ASESOR:<br>
                              <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                  <option selected></option>
                                  <option >waza</option>                                  
                               </select>
                              </div>
                              REVISOR:<br>
                              <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                  <option selected></option>
                                  <option >waza</option>                                  
                               </select>
                              </div>
                              REVISOR:<br>
                              <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                  <option selected></option>
                                  <option >waza</option>                                  
                               </select>
                              </div>
                            </p>
                            
                            
                            
                          {{-- footer de la ventana --}}
                          <div class="modal-footer">
                            <button tyle="button" class="btn btn-primary">Asignar Asesores</button>
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



