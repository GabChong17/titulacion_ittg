@extends('admin.escolares')
   
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Pase de No Inconveniencia</p></h2>
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
              @foreach($users_revision_escolares as $egresado)
                <tr>
                  <td>{{$egresado['estado']}}</td>
                  <td>{{$egresado['NoControl']}}</td>
                  <td>{{$egresado['name']}}</td>
                  <td>{{$egresado['carrera']}}</td>
                  <td>{{$egresado['planDeestudios']}}</td>                                                          
                  <td></td>                                                               
                  <td>

                    <a href="/DocumentosRevisados/{{$egresado->id}}" class=" btn btn-info"><i class="fas fa-book"></i></a> 
                    
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

        {{-- modal de documentos revisados --}} 
<div class="modal fade" id="documentos-modal">
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
      <p style="text-align:center; color: #140303;">                            
          <h4>Nombre:</h4>
          {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
          Requisitos entregados:
          <h4>Tema:</h4>
          {{$egresado['tema']}}<br>
          <h4>Documentos:</h4>
          </p> 
          <a href="#asesores"> Hoja de no adeudo de material</a>
          {{-- footer de la ventana --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Documentos revisados</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        {{-- modal de inconveniencia --}}
<div class="modal fade" id="inconveniencia-modal">
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
      <p style="text-align:center; color: #140303;">                            
          <h4>Nombre:</h4>
          {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
          Requisitos entregados:
          <h4>Tema:</h4>
          {{$egresado['tema']}}<br>
          <h4>Documentos:</h4>
          </p> 
      
          {{-- footer de la ventana --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Liberar No inconveniencia</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        {{-- modal de conculir --}}
 <div class="modal fade" id="concluir-modal">
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
      <p style="text-align:center; color: #140303;">                            
          <h4>Nombre:</h4>
          {{$egresado['a_paterno']}} {{$egresado['a_materno']}} {{$egresado['name']}} <br>
          <h4>Tema:</h4>
          {{$egresado['tema']}}<br>
          </p> 
          <a href="#asesores">Protocolo</a><br>
          <a href="#asesores">Juramento</a>
          {{-- footer de la ventana --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Concluir</button>
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



