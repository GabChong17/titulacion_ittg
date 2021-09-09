@extends('dashboard')
@section('content')

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

    </script>

   <br><br>
    <center>
   <p style="text-align:center; color: #190D47;" >

        <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
            <tr style="color: #190D47;">
                <td>Estado</td>
                <td>NoControl</td>
                <td>Nombre</td>
                <td>Carrera</td>
                <td>Opción</td>
                <td>Cita</td>
                <td>Acciones</td>
            </tr>
            
            <tr style="color: #190D47;">
                <td data-th="Estado">{{ Auth::user()->estado }} </td>
                <td data-th="NoControl">{{ Auth::user()->NoControl }}</td>
                <td data-th="Nombre">{{ Auth::user()->name }}</td>
                <td data-th="Carrera">{{ Auth::user()->carrera }}</td>
                <td data-th="Opción">{{ Auth::user()->planDeestudios }}</td>
                @foreach ($tramites as $tramite)
                    <td data-th="Cita">{{$tramite->cita}}</td>
                @endforeach
                      
                <td >
                    {{-- modal de vista de asesores --}}
                <a href="#asesores" class="fas fa-address-card" data-toggle="modal"></a>                          
                <div class="modal fade" id="asesores">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      {{-- header de la ventana --}}
                      <div class="modal-header">
                        <button tyle="button" class="clase" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align:center; color: #8F362C;"> Informacion del egresado {{ Auth::user()->NoControl }} .</h4>
                      </div>
                      {{-- contenido de la vetana --}}
                      <div class="modal-body">
                        <p style="color: #140303;">
                        
                            <h4>Nombre: </h4> {{ Auth::user()->name }}<br>
                            

                            <table class="rwd-table" id="academia" style="width:80%; text-align:center; color: #190D47;" >
                                <tr style="color: #190D47;">
                                    <td>Asesor</td>
                                    <td>Revisor</td>
                                    <td>Revisor</td>
                                </tr>
                                <tr style="color: #190D47;">
                                    <td>Asesor</td>
                                    <td>Revisor 1</td>
                                    <td>Revisor 2</td>
                                </tr>
            
                            </table>  

                        </p>
                       
                        
                      {{-- footer de la ventana --}}
                      <div class="modal-footer">
                        
                        <button tyle="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        
                      </div>
                    </div>
                  </div>                      
                </div>
                </td>
                
                
                
            </tr>
            
        </table>   
</p>
<div class="button-25">
<input type="submit" id="subir"  value="Subir"></div>
</div>

        
    @endsection
