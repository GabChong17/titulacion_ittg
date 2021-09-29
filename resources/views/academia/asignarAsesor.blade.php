
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
                            <th colspan="2">Nombre</th>
                            <th colspan="2" >Tema</th>
                            
                          </tr>
                          <tr>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled> </td>
                            <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$tramite->tema}}" disabled> </td>
                          </tr>
                          <tr>
                            <th>Asesor:</th>
                            <th>Revisor 1:</th>
                            <th>Revisor 2:</th>
                          </tr>
                          <tr>
                            <td >
                            <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example" name="asesor_id" >
                                @forelse($asesor as $asesor)
                                <option value="{{$asesor->id}}">{{$asesor->name}} {{$asesor->a_paterno}} {{$asesor->a_materno}}</option>  
                                    @empty
                                    <option disable>Sin asesores disponibles</option>
                                @endforelse                         
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example" name="revisor1_id" >
                                @forelse($revisor as $revisor)
                                <option value="{{$revisor->id}}">{{$revisor->name}} {{$revisor->a_paterno}} {{$revisor->a_materno}}</option>  
                                    @empty
                                    <option disable>Sin revisores disponibles</option>
                                @endforelse                                 
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-12">
                              <select class="form-select" aria-label="Default select example" name="revisor2_id">
                                @forelse($revisor2 as $revisor2)
                                <option value="{{$revisor2->id}}">{{$revisor2->name}} {{$revisor2->a_paterno}} {{$revisor2->a_materno}}</option>  
                                    @empty
                                    <option disable>Sin revisores disponibles</option>
                                @endforelse                                 
                             </select>
                            </div>
                            </td>
                        </tr>
                          
                          <tr>
                            <td colspan="2"><a href="/academiaAsesor" class="btn btn-primary">Regresar</a></td>
                            <td colspan="2"><button class="btn btn-primary" type='submit' value='Asesores_Asignados'>Asignar Asesores</button></td>
                            
                          </tr>
                            <tr>
                              <td colspan="4">Academia</td>
                              
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

