@extends('admin.escolares')
    @section('content')

    <div class="contenedor-titulo">


        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">Imprime Protocolo</div>
        
                  <div class="card-body">
                    <br>
        
                    <table class="table">
                      <tr>
                        <th>Title</th>
                        <th>Download file</th>
                        
                      </tr>
                      {{-- @forelse ($books as $book) --}}
                        <tr>
                          <td>nose</td>
                          <td><a href="#" class="btn btn-sm btn-danger">Descarga</a></td>
                          
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

    