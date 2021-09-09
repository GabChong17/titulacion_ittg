
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
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="asesor_id" :value="{{ old('campus') }}">
                                @forelse($asesor as $asesor)
                                <option value="{{$asesor->id}}">{{$asesor->name}}</option>  
                                    @empty
                                    <option disable>Sin asesores disponibles</option>
                                @endforelse                         
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                @forelse($revisor as $revisor)
                                <option value="{{$revisor->id}}">{{$revisor->name}}</option>  
                                    @empty
                                    <option disable>Sin revisores disponibles</option>
                                @endforelse                                 
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                @forelse($revisor2 as $revisor2)
                                <option value="{{$revisor2->id}}">{{$revisor2->name}}</option>  
                                    @empty
                                    <option disable>Sin revisores disponibles</option>
                                @endforelse                                 
                             </select>
                            </div>
                            </td>
                        </tr>
                      
                          
                          
                          <tr>
                            <td><a href="/academiaAsesor" class="btn btn-primary">Regresar</a></td>
                            <td><a href="/#" class="btn btn-primary">Asignar Asesores</a></td>
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

