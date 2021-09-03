    @extends('admin.division')     
      @section('css')
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
      
      @endsection


      @section('content')
      <div class="card">
        <div class="card-body">
          <h2><p style="text-align:center; color: #140303;">Pase de Liberacion</p></h2>
                    <table id="usuarios" class="table table-striped ">
                    <thead class= "bg-primary text-white">
                    <tr>
                      <th>Estado</th>
                      <th>NC</th>
                      <th>Nombre</th>
                      <th>Carrera</th>
                      <th>Opcion</th>
                      <th>Recepcion</th>
                      <th>Asesores</th>   
                                    
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
                        <td>
                          {{-- modal de recepcion --}}
                          <a href={{"#recepcion",$egresado->id}} class="fas fa-user-clock" data-toggle="modal"></a>                          
                          <div class="modal fade" id="recepcion">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                {{-- header de la ventana --}}
                                <div class="modal-header">
                                  <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" style="text-align:center; color: #8F362C;" >Agendar al egresado con Escolares.</h4>
                                </div>
                                {{-- contenido de la vetana --}}
                                <div class="modal-body">
                                  <h5><p style="text-align:center; color: #140303;">Primero seleccione una fecha, luego una hora para agendar la cita.</p></h5>
                                  {{-- recepcion --}}
                                  <div class="col-md-4 text-center font-weight-bold">
                                    <div class="row text-center text-primary">
                                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                            
                                            </div>
                                    </div>  
                                   <div class="row my-4">
                                    <form method="POST" action="/recepcion" enctype="multipart/form-data" > 
                                      @csrf
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker1'>
                                               <input type="datetime-local" id="recepcion_d" onInput="validar2()" name="recepcion">
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div>
                                      </div>         
                                      <br>
                                      
                                      <input type="submit" id="boton_recepcion" class="btn btn-primary" value="Agregar">
                                      
                                  </form>   
                                   </div>
                                </div>                               
                                {{-- footer de la ventana --}}
                                <div class="modal-footer">
                                  <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  
                                </div>
                              </div>
                            </div>                      
                          </div>
                        </td>
                        <td>
                          {{-- modal de vista de asesores --}}
                              <a href="#asesores" class="fas fa-address-card" data-toggle="modal"></a>                          
                          <div class="modal fade" id="asesores">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                {{-- header de la ventana --}}
                                <div class="modal-header">
                                  <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                                </div>
                                {{-- contenido de la vetana --}}
                                <div class="modal-body">
                                  <p style="color: #140303;">
                                  
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

      

