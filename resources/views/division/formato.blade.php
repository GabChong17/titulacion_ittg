@extends('admin.division')

@section('content')
  <div class="contenedor-titulo">


    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Formato Egresado/Recepcional</div>
    
              <div class="card-body">
                <br>
    
                <table class="table">
                  <tr>
                    <th>Titulo</th>
                    <th>Download </th>
                    
                  </tr>
                  {{-- @forelse ($books as $book) --}}
                    <tr>
                      <td>formato</td>
                      <td><a href="#" class="btn btn-sm btn-danger">Descarga</a></td>
                      
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