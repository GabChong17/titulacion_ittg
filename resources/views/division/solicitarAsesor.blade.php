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
                    <form action="/solicitudAsesor/{{$egresado->id}}" method="post" enctype="multipart/form-data">
                      @csrf
                      
                    <table class="table">
                      <tr>
                        <th>Nombre:</th>
                        
                        <th>Tema: </th>                        
                      </tr>
                        <tr>
                          <td>{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}</td>
                          <td>{{$tramite->tema}}</td>
                          {{-- <td>{{$tramite->requisito1}}</td> --}}
                         
                        </tr>
                      <tr>
                        <td><a href="/divisionAval" class="btn btn-primary">Regresar</a></td>
                        <td><button class="btn btn-primary" type='submit' value='Solicitud_De_Asesores'>Solicitar Asesores</button></td>
                       
                        </tr>
                      
                      <tr>
                        <td><a href="#" >Descargar documentos</a></td>
                        
                      </tr>
                      <tr>
                        <td><a target="_tab" href="/imprimir_aval_asesores/{{$egresado->id}}">Imprimir Solicitud de Asesores</a></td>
                        
                      </tr>
                      <tr>
                        <td colspan="2">Division de estudios</td>
                        
                      </tr>
                      {{-- @endforelse --}}
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






