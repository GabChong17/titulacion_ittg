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
                          <td> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$egresado->name}} {{$egresado->a_paterno}} {{$egresado->a_materno}}" disabled> </td>
                          <td> <input type="text"  id="egresado_id" name="egresado_id" class="form-control" value="{{$tramite->tema}}" disabled> </td>     
                        </tr>
                      <tr>
                        <td><a href="/divisionAval" class="btn btn-primary">Regresar</a></td>
                        <td><button class="btn btn-primary" type='submit' value='Solicitud_De_Asesores'>Solicitar Asesores</button></td>
                       
                        </tr>
                      
                      <tr>
                      
                        {{-- <td colspan="2">
                          Requisitos
                          <ul>
                            <li> <a href="{{ route('requisito1.download', $tramite->id) }}">{{$tramite->requisito1}}</a></li>
                            <li> <a href="{{ route('requisito2.download', $tramite->id) }}">{{$tramite->requisito2}}</a></li>
                            <li> <a href="{{ route('requisito3.download', $tramite->id) }}">{{$tramite->requisito3}}</a></li>
                          </ul>
                         </td> --}}
                        
                      </tr>
                      <tr>
                        <td colspan="2"><a target="_tab" href="/imprimir_aval_asesores/{{$egresado->id}}">Imprimir Solicitud de Asesores</a></td>
                        
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






