
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
                          <form action="/Jurado/{{$egresado->id}}" method="post" enctype="multipart/form-data">
                            @csrf



                          
                          {{-- @forelse ($books as $book) --}}
                          <tr>
                            <th>Nombre</th>
                            <th>Tema</th>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" class="form-control" name="egresado_id" value="{{$egresado->name}}" disabled>
                            </td>
                              <td>
                                <input type="text" class="form-control"  name="tema_id" value="{{$tramite->tema}}" disabled>
                              </td>
                              
                          </tr>
                          <tr>
                            <th>Presidente:</th>
                            <th>Secretario:</th>
                            <th>Vocal Propietario:</th>
                            <th>Vocal Suplente:</th>
                          </tr>
                          <tr>
                              
                            <td>
                                <div class="col-md-12">
                                  <select class="form-select" aria-label="Default select example" name="presidente">
                                    @forelse($presidente as $presidente)
                                    <option value="{{$presidente->id}}">{{$presidente->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                  <select class="form-select" aria-label="Default select example" name="secretario" >
                                    @forelse($secretario as $secretario)
                                    <option value="{{$secretario->id}}">{{$secretario->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                  <select class="form-select" aria-label="Default select example" name="vocalp" >
                                    @forelse($vocal_propietario as $vocal_propietario)
                                    <option value="{{$vocal_propietario->id}}">{{$vocal_propietario->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                  <select class="form-select" aria-label="Default select example" name="vocals" >
                                    @forelse($vocal_suplente as $vocal_suplente)
                                    <option value="{{$vocal_suplente->id}}">{{$vocal_suplente->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>

                                
                      
                          
                          
                          <tr>
                            <td><a href="/academiaJurado" class="btn btn-primary">Regresar</a></td>
                            <td><input class='btn btn-primary'   type='submit' value='Asignar Jurado'></td>
                          </tr>
                            <tr>
                              <td colspan="2">Academia</td>
                              
                            </tr>
                          </form>

                           
                              
                            
                          
                        </table>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        
        
           <h2 style="padding: 50px 30px;"></h2>
        
        </div>
@endsection

