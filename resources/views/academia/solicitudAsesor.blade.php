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
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#asignar-asesor-modal">
                      <i class="fas fa-users"></I>
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#asesoria-liberada-modal">
                      <i class="fas fa-file-alt"></I>
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

        {{-- modal de solicitud de asesor --}} 
<div class="modal fade" id="asignar-asesor-modal">
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
      <div class="modal-body">
        <p style="text-align:center; color: #140303;">                            
          <h4>Nombre:</h4>
          {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
          Requisitos entregados:
          <h4>Tema:</h4>
          {{$egresado['tema']}}<br>
          <h4>Documentos:</h4>
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
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Asignar Asesores</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- modal de solicitud de asesor --}} 
<div class="modal fade" id="asesoria-liberada-modal">
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
      <div class="modal-body">
        <p style="text-align:center; color: #140303;">                            
          <h4>Nombre:</h4>
          {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
          Requisitos entregados:
          <h4>Tema:</h4>
          {{$egresado['tema']}}<br>
          <h4>Documentos:</h4>
          <h4>Formato de firmas escaneados:</h4>
          <form method="POST" action="/firmasEscaneadas" enctype="multipart/form-data"> 
            @csrf
          <input type="file" id="subir" onInput="validar()" class="form-control document" name="firmas" multiple>
          <br>
          <h4>Imprimir:</h4>


          </p> 
          
      
          {{-- footer de la ventana --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Asesoria liberada</button>
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



