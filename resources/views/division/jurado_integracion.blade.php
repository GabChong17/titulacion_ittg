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
                      <form method="POST" action="/acto/{{$egresado->id}}" enctype="multipart/form-data" > 
                        @csrf
                      {{-- @forelse ($books as $book) --}}
                      <tr>
                        <th colspan="2">Nombre</th>
                        <th colspan="2">Tema</th>
                      </tr>
                      <tr>
                        
                        <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled> </td>
                        <td colspan="2"> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$tramite->tema}}" disabled> </td>
                      </tr>
                      
                      <tr>
                        <th>Presidente:</th>
                        <th>Secretario:</th>
                        <th>Vocal Propietario:</th>
                        <th>Vocal Suplente:</th>
                        
                      </tr>
                      
                        <tr>
                            <td>{{$presidente->profesion}} {{$presidente->name}} {{$presidente->a_paterno}} {{$presidente->a_materno}}</td>
                            <td>{{$secretario->profesion}} {{$secretario->name}} {{$secretario->a_paterno}} {{$secretario->a_materno}}</td>
                            <td>{{$vocal_propietario->profesion}} {{$vocal_propietario->name}} {{$vocal_propietario->a_paterno}} {{$vocal_propietario->a_materno}}</td>
                            <td>{{$vocal_suplente->profesion}} {{$vocal_suplente->name}} {{$vocal_suplente->a_paterno}} {{$vocal_suplente->a_materno}}</td>                           
                            
                        </tr>
                      <tr>
                        <td colspan="2" ><a href="/integracionJurado" class="btn btn-primary">Regresar</a></td>
                        <td colspan="2"><input type="submit" id="boton_recepcion" class="btn btn-primary" value="Agendar Acto"></td>
                      </form>  
                      </tr>
                     
                        <tr>
                          <td  colspan="2"><a target="_tab" href="/imprimir_aviso_de_acto/{{$egresado->id}}"">Aviso de Acto</a></td>
                          <td  colspan="2"><a target="_tab" href="/imprimir_aviso_de_hora_actoRecep/{{$egresado->id}}"">Aviso de hora y fecha</a></td>
                        </tr>
                        <tr>
                          <td colspan="4">Division de estudios</td>
                        
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






