
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
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Tema</th>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <input type="text" class="form-control" name="egresado_id" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled>
                            </td>
                              <td colspan="2">
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
                                    <option value="{{$presidente->id}}">{{$presidente->name}} {{$presidente->a_paterno}} {{$presidente->a_materno}}</option>  
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
                                    <option value="{{$secretario->id}}">{{$secretario->name}} {{$secretario->a_paterno}} {{$secretario->a_materno}}</option>  
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
                                    <option value="{{$vocal_propietario->id}}">{{$vocal_propietario->name}} {{$vocal_propietario->a_paterno}} {{$vocal_propietario->a_materno}}</option>  
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
                                    <option value="{{$vocal_suplente->id}}">{{$vocal_suplente->name}} {{$vocal_suplente->a_paterno}} {{$vocal_suplente->a_materno}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>

                                
                      
                          
                          
                          <tr>
                            <td colspan="2"><a href="/academiaJurado" class="btn btn-primary">Regresar</a></td>
                            <td colspan="2"><input class='btn btn-primary'   type='submit' value='Asignar Jurado'></td>
                          </tr>
                            <tr>
                              <td colspan="4">Academia</td>
                              
                              
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

