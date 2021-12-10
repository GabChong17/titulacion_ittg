@extends('admin.users.index', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('agregaRequisitos2', $opcion->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Opciones</h4>
              <p class="card-category">Requisitos</p>
            </div>
            <div class="card-body">
                {{-- requisito 1 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 1</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito1" value="{{ old('requisito1',  $opcion->requisito1    ) }}" autofocus>
                  @if ($errors->has('requisito1'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito1') }}</span>
                  @endif
                </div>
                {{-- requisito 2 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 2</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito2" value="{{ old('requisito2',  $opcion->requisito2    ) }}" autofocus>
                  @if ($errors->has('requisito2'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito2') }}</span>
                  @endif
                </div>
                {{-- requisito 3 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 3</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito3" value="{{ old('requisito3',  $opcion->requisito3    ) }}" autofocus>
                  @if ($errors->has('requisito3'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito3') }}</span>
                  @endif
                </div>
                {{-- requisito 4 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 4</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito4" value="{{ old('requisito4',  $opcion->requisito4    ) }}" autofocus>
                  @if ($errors->has('requisito4'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito4') }}</span>
                  @endif
                </div>
                {{-- requisito 5 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 5</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito5" value="{{ old('requisito5',  $opcion->requisito5    ) }}" autofocus>
                  @if ($errors->has('requisito5'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito5') }}</span>
                  @endif
                </div>
                {{-- requisito 6 --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Requisito 6</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="requisito6" value="{{ old('requisito6',  $opcion->requisito6    ) }}" autofocus>
                  @if ($errors->has('requisito6'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('requisito6') }}</span>
                  @endif
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
