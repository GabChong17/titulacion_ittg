@extends('admin.division')     
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<div class="card">
  <div class="card-body">
    <h2><p style="text-align:center; color: #140303;">Integracion Jurado</p></h2>
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

                    <a href="/integracionJurado2/{{$egresado->id}}" class=" btn btn-info"><i class="fas fa-address-card"></i></a>   
                    {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#asesores-modal">
                      <i class="fas fa-address-card"></I>
                    </button> --}}
                    
                  </td>    
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
        
        {{-- modal de vista de asesores --}}
        <div class="modal fade" id="asesores-modal">
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
            
              <h4>Nombre: </h4> {{ Auth::user()->name }}<br>
                    
      
                    <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                        <tr style="color: #190D47;">
                            <td>Asesor</td>
                            <td>Revisor</td>
                            <td>Revisor</td>
                        </tr>
                        <tr style="color: #190D47;">
                            <td>Asesor</td>
                            <td>Revisor 1</td>
                            <td>Revisor 2</td>
                        </tr>
      
                    </table>  
      
                </p>
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



