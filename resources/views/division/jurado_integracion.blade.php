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
                            <td>Presidente</td>
                            <td>Secretario</td>
                            <td>Vocal Propietario</td>
                            <td>Vocal Suplente</td>                           
                            
                        </tr>
                      <tr>
                        <td><a href="/integracionJurado" class="btn btn-primary">Regresar</a></td>
                        <td><a href="#" class="btn btn-primary">Agendar Acto</a></td>
                      </tr>
                     
                        <tr>
                          <td colspan="2">Division de estudios</td>
                          <td><a target="_tab" href="/imprimir_aviso_de_acto">Aviso de Acto</a></td>
                          <td><a target="_tab" href="/imprimir_aviso_de_hora_actoRecep">Aviso de hora y fecha</a></td>
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






