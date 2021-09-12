
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
                            <th>Presidente:</th>
                            <th>Secretario:</th>
                            <th>Vocal Propietario:</th>
                            <th>Vocal Suplente:</th>
                          </tr>
                          <tr>
                              
                            <td>
                                <div class="col-md-6">
                                  <select class="form-select" aria-label="Default select example" name="asesor_id" :value="{{ old('campus') }}">
                                    @forelse($presidente as $presidente)
                                    <option value="{{$presidente->id}}">{{$presidente->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                  <select class="form-select" aria-label="Default select example" name="asesor_id" :value="{{ old('campus') }}">
                                    @forelse($secretario as $secretario)
                                    <option value="{{$secretario->id}}">{{$secretario->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                  <select class="form-select" aria-label="Default select example" name="asesor_id" :value="{{ old('campus') }}">
                                    @forelse($vocal_propietario as $vocal_propietario)
                                    <option value="{{$vocal_propietario->id}}">{{$vocal_propietario->name}}</option>  
                                        @empty
                                        <option disable>Sin asesores disponibles</option>
                                    @endforelse                         
                                 </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                  <select class="form-select" aria-label="Default select example" name="asesor_id" :value="{{ old('campus') }}">
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
                            <td><a href="/#" class="btn btn-primary">Asignar Jurado</a></td>
                          </tr>
                            <tr>
                              <td colspan="2">Academia</td>
                              <td><a target="_tab" href="/imprimir_respuesta_integracion_jurado">Respues de Integracion.</a></td>
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

