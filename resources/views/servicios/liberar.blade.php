
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
                          <form method="POST" action="/liberarNo/{{$egresado->id}}" enctype="multipart/form-data" > 
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
                            <td><a href="/LiberarNoIncoveniencia" class="btn btn-primary">Regresar</a></td>
                            {{-- No_Incoveniencia --}}
                            <td><input type="submit" id="boton_recepcion" class="btn btn-primary" value="Liberar No inconveniencia"></td>
                            {{-- <td><a href="/#" class="btn btn-primary">Liberar No inconveniencia</a></td> --}}
                          </form> 
                          </tr>
                         
                            <tr>
                           
                              <td colspan="2"><a target="_tab" href="/boucher_de_pago/{{$egresado->id}}">Boucher de pago</a></td>
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

