
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
                        <form action="/Asesor/{{$egresado->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <table class="table">
                          
                          {{-- @forelse ($books as $book) --}}
                          <tr>
                            <th>Nombre</th>
                            <th>Tema</th>
                          </tr>
                          <tr>
                            <td> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}}" disabled> </td>
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
                              <select class="form-select" aria-label="Default select example" name="asesor_id" >
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
                              <select class="form-select" aria-label="Default select example" name="revisor1_id" >
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
                              <select class="form-select" aria-label="Default select example" name="revisor2_id">
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
                            <td><input class='btn btn-primary'   type='submit' value='Asignar Asesor'></td>
                          </tr>
                            <tr>
                              <td colspan="2">Academia</td>
                              
                            </tr>


                           
                              
                            
                          
                        </table>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        
        
           <h2 style="padding: 50px 30px;"></h2>
        
        </div>
@endsection

