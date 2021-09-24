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
                <br>
                
                <table class="table">
                    <div class="col-md-4 text-center font-weight-bold">
                        <div class="row text-center text-primary">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                          <tr>
                            <th>Nombre</th>
                            <th>Tema</th>
                          </tr>
                          <tr>
                            <td>{{$egresado->name}}</td>
                            <td>{{$tramite->tema}}</td>
                          </tr>
                                
                                </div>
                        </div> 
                         
                        <tr><td>
                          <h5><p style="text-align:center; color: #140303;">Seleccione una fecha.</p></h5>
                       <div class="row my-4">
                        <form method="POST" action="/actoRecepcion/{{$egresado->id}}" enctype="multipart/form-data" > 
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
                       </div>
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <td><a href="/actoRecepcional" class="btn btn-primary">Regresar</a></td>
                    <td><input type="submit" id="boton_acto_recepcion" class="btn btn-sm btn-danger" value="Solicitar Jurado"></td>
                  </form>
                  </tr>
                 
                    <tr>
                      <td colspan="2">Division de estudios</td>
                      <td><a target="_tab" href="/imprimir_solicitud_integracion/{{$egresado->id}}"" >Ver liberacion de asesorias.</a></td>
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






