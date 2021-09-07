
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
                              
                              {{-- @forelse ($books as $book) --}}
                              <tr>
                                <th>Nombre</th>
                                <th>Tema</th>
                              </tr>
                              <tr>
                                <td>nombre</td>
                                <td>tema</td>
                              </tr>
                              
                              
                              <tr>
                                <td><a href="/NoIncoveniencia" class="btn btn-primary">Regresar</a></td>
                                <td><a href="/#" class="btn btn-primary">Documentos Revisados</a></td>
                              </tr>
                             
                                <tr>
                                  <td colspan="2">Servicios Escolares</td>
                                  <td><a href="/integracionJurado" >Hoja de no adeudo de material</a></td>
                                  
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

    