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
                            <th>Nombre</th>
                            <th>Tema</th>
                          </tr>
                          <tr>
                            <td>{{$egresado->name}}</td>
                            <td>{{$egresado->tema}}</td>
                          </tr>
                          
                          
                          <tr>
                            <td><a href="/escolaresProtocolo" class="btn btn-primary">Regresar</a></td>
                            <td><input class='btn btn-primary'   type='submit' value='Concluir'></td>
                          </tr>
                         
                            
                            <tr>
                              <td><a target="_tab" href="/imprimir_protocolo/{{$egresado->id}}">Protocolo</a></td>
                              
                            </tr>
                            <tr>
                              <td><a target="_tab" href="/imprimir_juramento/{{$egresado->id}}">Juramento</a></td>
                              
                            </tr>
                            <tr>
                              <td colspan="2">Servicios Escolares</td>
                              
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


