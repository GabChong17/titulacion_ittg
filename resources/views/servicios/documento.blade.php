
@extends('admin.escolares')
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
                              <form method="POST" action="/documentos/{{$egresado->id}}" enctype="multipart/form-data" > 
                                @csrf
                              {{-- @forelse ($books as $book) --}}
                              <tr>
                                <th>Nombre</th>
                                <th>Tema</th>
                              </tr>
                              <tr>
                                <td>{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}</td>
                                <td>{{$tramite->tema}}</td>
                              </tr>
                              
                              
                              <tr>
                                <td><a href="/NoIncoveniencia" class="btn btn-primary">Regresar</a></td>
                                <td><input type="submit" id="boton_recepcion" class="btn btn-primary" value="Documentos Revisados"></td>
                              </form> 
                              </tr>
                             
                                <tr>
                                  
                                  <td><a target="_tab" href="/imprimir_no_adeudo/{{$egresado->id}}"">Hoja de no adeudo de material</a></td>
                                  <td><a target="_tab" href="/imprimir_solicitud_acto/{{$egresado->id}}"">Solicitud Acto Recepcion</a></td>
                                </tr>
                                <tr>
                                <td colspan="2">Servicios Escolares</td>
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

    