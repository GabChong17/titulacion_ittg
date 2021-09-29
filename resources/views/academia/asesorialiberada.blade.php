
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
                            <th  colspan="2">Nombre</th>
                            <th  colspan="2"> Tema</th>
                            
                            
                          </tr>
                          <tr>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled> </td>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$tramite->tema}}" disabled> </td>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Asesor:</th>
                            <th>Revisor 1:</th>
                            <th>Revisor 2:</th>
                          </tr>
                          <tr>
                            <td>
                              {{$asesor->profesion}} {{$asesor->name}} {{$asesor->a_paterno}} {{$asesor->a_materno}} 
                            </td>
                            <td>
                              {{$revisor1->profesion}} {{$revisor1->name}} {{$revisor1->a_paterno}} {{$revisor1->a_materno}}
                            </td>
                            <td>
                              {{$revisor2->profesion}} {{$revisor2->name}} {{$revisor2->a_paterno}} {{$revisor2->a_materno}} 
                            </td>

                        </tr>
                        <tr>
                            <th> Formato de firmas escaneadas:</th>
                            <td>
                                
                                <form method="POST" action="/firmasEscaneadas/{{$egresado->id}}" enctype="multipart/form-data"> 
                                    @csrf
                                <input type="file" id="firmas" onInput="validar()" class="form-control document" name="firmas" multiple required>
                                <br>
                                
                                
                        
                        </tr>
                          
                          
                          <tr>
                            <td colspan="2" ><a href="/liberacionAsesoria" class="btn btn-primary">Regresar</a></td>
                            <td colspan="2"><button  style="background-color: #384085;" type="submit" class="btn btn-primary" id="subir" >Asesoria liberada</button></td>
                            {{-- <td><a href="/#" class="btn btn-primary">Asesoria liberada</a></td> --}}
                            <td colspan="2"></td> 
                          </tr>
                          
                            <tr>
                              <td colspan="2"><a target="_tab" href="/imprimir_aval_academia/{{$egresado->id}}"">Aval de academia.</a></td>  
                              <td colspan="2"><a target="_tab" href="/imprimir_liberacion_academica/{{$egresado->id}}"">Formato de liberacion.</a></td> 
                              
                            </tr>
                            
                            <tr>
                              <td colspan="4">Academia</td> 
                              
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

