@extends('admin.division')     
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection
@section('content')


    
    <div class="contenedor-titulo">


        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                 <h2><div class="card-header">Informacion del egresado. </div></h2>
        
                  <div class="card-body">
                    
                    
                    <table class="table">
                        <div class="modal-body">
                          <tr>
                            <th>Nombre</th>
                          </tr>
                          <tr>
                            <td>{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}</td>                            
                          </tr>
                          <tr>
                            <td>
                            <h5><p style="text-align:center; color: #140303;">Primero seleccione una fecha, luego una hora para agendar la cita.</p></h5>
                            {{-- recepcion --}}
                            <div class="col-md-4 text-center font-weight-bold">
                              <div class="row text-center text-primary">
                              <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                      
                                      </div>
                              </div>  
                             <div class="row my-4">
                              <form method="POST" action="/recepcion/{{$egresado->id}}" enctype="multipart/form-data" > 
                                @csrf
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                         <input type="datetime-local" id="recepcion_d" onInput="validar2()" name="recepcion">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>                        
                          </td>
                          </tr>
                             </div>
                          </div>
                      <tr>
                        <td><a href="/PaseLiberacion" class="btn btn-primary">Regresar</a></td>
                        <td><input type="submit" id="boton_recepcion" class="btn btn-primary" value="Revison Escolares"></td>
                      </form>  
                      </tr>
                     
                        <tr>
                          <td colspan="2">Division de estudios</td>
                          <td><td><a target="_tab" href="/imprimir_liberacion_asesorias/{{$egresado->id}}"">Liberacion de Asesorias.</a></td></td>
                        <td><a target="_tab" href="/imprimir_DGP">Imprimir DGP</a></td>
                        </tr>
                      {{-- @endforelse --}}
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    
    
       <h2 style="padding: 50px 30px;"></h2>
    
    </div>

@endsection






