
@extends('admin.academia')
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
                          
                          {{-- @forelse ($books as $book) --}}
                          <tr>
                            <th>Nombre</th>
                            <th>Tema</th>
                          </tr>
                          <tr>
                            <td>{{$egresado->name}}</td>
                            <td>{{$egresado->tema}}</td>
                          </tr>
                          <tr>
                            <th>Asesor:</th>
                            <th>Revisor 1:</th>
                            <th>Revisor 2:</th>
                          </tr>
                          <tr>
                            <td>
                                Asesor
                            </td>
                            <td>
                                Revisor 1
                            </td>
                            <td>
                                Revisor 2
                            </td>

                        </tr>
                        <tr>
                            <th> Formato de firmas escaneadas:</th>
                            <td>
                                
                                <form method="POST" action="/firmasEscaneadas/{{$egresado->id}}" enctype="multipart/form-data"> 
                                    @csrf
                                <input type="file" id="firmas" onInput="validar()" class="form-control document" name="firmas" multiple>
                                <br>
                                <button  style="background-color: #384085;" type="submit" class="btn btn-primary" id="subir" >Asesoria liberada</button>
                                
                        
                        </tr>
                          
                          
                          <tr>
                            <td><a href="/liberacionAsesoria" class="btn btn-primary">Regresar</a></td>
                            <td></td>
                            {{-- <td><a href="/#" class="btn btn-primary">Asesoria liberada</a></td> --}}
                          </tr>
                            <tr>
                              <td><a target="_tab" href="/imprimir_aval_academia/{{$egresado->id}}"">Aval de academia.</a></td>  
                            </tr>
                            <tr>
                              <td><a target="_tab" href="/imprimir_liberacion_academica/{{$egresado->id}}"">Formato de liberacion.</a></td> 
                            </tr>
                            <tr>
                              <td colspan="2">Academia</td> 
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        
        
           <h2 style="padding: 50px 30px;"></h2>
        
        </div>
@endsection

