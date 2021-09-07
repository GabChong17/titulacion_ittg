@extends('admin.division')     
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection
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
                        <th>Asesor</th>
                        <th>Revisor</th>
                        <th>Revisor</th>
                        
                      </tr>
                      
                        <tr>
                            <td>Asesor</td>
                            <td>Revisor 1</td>
                            <td>Revisor 2</td>
                        </tr>
                      <tr>
                        <td><a href="/integracionJurado" class="btn btn-primary">Regresar</a></td>
                        
                      </tr>
                     
                        <tr>
                          <td colspan="2">Division de estudios</td>
                        </tr>
                      {{-- @endforelse --}}
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    
    
       <h2 style="padding: 50px 30px;"></h2>
    
    </div>

@endsection






