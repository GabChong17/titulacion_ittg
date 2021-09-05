@extends('admin.division')     
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Acto Recepcional</p></h2>
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
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#acto-modal">
                      <i class="fas fa-user-clock"></I>
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

        {{-- modal de acto recepcional --}}
<div class="modal fade" id="acto-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      {{-- header de la ventana --}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" align="center"><b>Agendar al egresado con Escolares..</b></h4>
      </div>
      {{-- contenido de la vetana --}}
      <p style="text-align:center; color: #140303;">                            
        <h4>Nombre:</h4>
        {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
        Requisitos entregados:
        <h4>Tema:</h4>
        {{$egresado['tema']}}<br>
        <h4>Documentos:</h4>
        </p> 
      <div class="modal-body">
          <h5><p style="text-align:center; color: #140303;">Seleccione una fecha.</p></h5>
          {{-- recepcion --}}
          <div class="col-md-4 text-center font-weight-bold">
            <div class="row text-center text-primary">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    
                    </div>
            </div>  
           <div class="row my-4">
            <form method="POST" action="/actoRecepcion" enctype="multipart/form-data" > 
              @csrf
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'>
                       <input type="datetime-local" id="acto_recepcion_d" onInput="validar2()" name="acto_recepcion">
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>         
              <br>
              
              <input type="submit" id="boton_acto_recepcion" class="btn btn-primary" value="Solicitar Jurado">
              
          </form>   
           </div>
        </div>
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
$('#usuarios').DataTable({
  "lengthMenu":[[5,7,10,25,50,-1], [5,7,10,25,50,"all"]]
});
});
  </script>
  
@endsection


