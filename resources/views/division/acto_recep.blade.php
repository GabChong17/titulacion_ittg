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
                <h5><p style="text-align:center; color: #140303;">Seleccione una fecha.</p></h5>
                <table class="table">
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
                          
                          <input type="submit" id="boton_acto_recepcion" class="btn btn-sm btn-danger" value="Solicitar Jurado">
                          
                      </form>   
                       </div>
                    </div>
                    
                  <tr>
                    <td><a href="/PaseLiberacion" class="btn btn-primary">Regresar</a></td>
                    <td></td>
                  </tr>
                 
                    <tr>
                      <td colspan="2">Division de estudios</td>
                      <td><a href="#" >Ver liberacion de asesorias.</a></td>
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





