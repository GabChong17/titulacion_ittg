@extends('admin.escolares')
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
                          <form action="/finalizar/{{$egresado->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                         
                          <tr>
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Tema</th>
                          </tr>
                          <tr>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled> </td>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$tramite->tema}}" disabled> </td>
                      
                          </tr>
                          
                          
                          <tr>
                            <td colspan="2"><a href="/escolaresProtocolo" class="btn btn-primary">Regresar</a></td>
                            <td colspan="2"><input class='btn btn-primary'   type='submit' value='Concluir'></td>
                          </tr>
                         
                            
                            <tr>
                              <td colspan="2"><a target="_tab" href="/imprimir_protocolo/{{$egresado->id}}">Protocolo</a></td>
                              <td colspan="2"><a target="_tab" href="/imprimir_juramento/{{$egresado->id}}">Juramento</a></td>
                            </tr>

                            <tr>
                              <td colspan="4">Servicios Escolares</td>
                              
                            </tr>


                           
                              
                            
                          
                        </table>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        
        
           <h2 style="padding: 50px 30px;"></h2>
        
        </div>
@endsection


