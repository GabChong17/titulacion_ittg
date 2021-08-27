@extends('admin.users.index')
    @section('content')

    <!-- Begin Page Content --> 
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            
        
        
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">Nuevo juramento de Etica</div>
            
                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
           
                      <div class="card-body">
                        <form action="{{-- {{ route('books.st') }}  --}}" method="post" enctype="multipart/form-data">
                        @csrf
                        Titulo:
                        <br>
                        <input type="text" name="titulo" class="form-control">
            
                        <br>
            
                        Juramento de Etica:
                        <br>
                        <input type="file" name="juramento" id="">
                        <br><br>
            
                        <input type="submit" value="Guardar" class="btn btn-success">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
        
        
        </div>
        

    @endsection

