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
                      <tr>
                        <th>Nombre:</th>
                        
                        <th>Tema: </th>
                        
                      </tr>
                      {{-- @forelse ($books as $book) --}}
                        <tr>
                          <td>{{$egresado->name}}</td>
                          <td>{{$egresado->tema}}</td>
                         
                        </tr>
                      <tr>
                        <td><a href="/divisionAval" class="btn btn-primary">Regresar</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Solicitar Asesores.</a></td>
                      </tr>
                      
                      <tr>
                        <td><a href="#" >Descargar documentos.</a></td>
                        
                      </tr>
                      <tr>
                        <td><a target="_tab" href="/imprimir_aval_asesores/{{$egresado->id}}">Imprimir Solicitud de Asesores</a></td>
                        
                      </tr>
                      <tr>
                        <td colspan="2">Servicios Escolares</td>
                        
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






