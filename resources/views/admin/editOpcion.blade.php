@extends('admin.users.index', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('editarOpcion', $opcion->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Opciones</h4>
              <p class="card-category">Editar opciones</p>
            </div>
            <div class="card-body">
                {{-- nombre --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre',  $opcion->Nombre    ) }}" autofocus>
                  @if ($errors->has('Nombre'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('Nombre') }}</span>
                  @endif
                </div>
                {{-- apellido paterno --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="Descripcion" value="{{ old('Descripcion',  $opcion->Descripcion    ) }}" autofocus>
                  @if ($errors->has('Descripcion'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('Descripcion') }}</span>
                  @endif
                </div>
              </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
                <a href="/opcionesPlan" class="btn btn-primary">Regresar</a>
              <button type="submit" class="btn btn-primary">Actualizar</button>
             
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
