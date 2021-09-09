
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
                            <td>{{$egresado->name}}</td>
                            <td>{{$egresado->tema}}</td>
                          </tr>
                          
                          
                          <tr>
                            <td><a href="/NoIncoveniencia" class="btn btn-primary">Regresar</a></td>
                            <td><a href="/#" class="btn btn-primary">Liberar No inconveniencia</a></td>
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

