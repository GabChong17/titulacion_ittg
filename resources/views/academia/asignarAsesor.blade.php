
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
                            <td>nombre</td>
                            <td>tema</td>
                          </tr>
                          <tr>
                            <th>Asesor:</th>
                            <th>Revisor 1:</th>
                            <th>Revisor 2:</th>
                          </tr>
                          <tr>
                            <td>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                <option selected></option>
                                <option >waza</option>                                  
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                <option selected></option>
                                <option >waza</option>                                  
                             </select>
                            </div>
                            </td>
                            <td>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                                <option selected></option>
                                <option >waza</option>                                  
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

