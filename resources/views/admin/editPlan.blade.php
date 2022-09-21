@extends('admin.users.index', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('actualizarPlan', $plan->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Plan</h4>
              <p class="card-category">Editar datos</p>
            </div>
            <div class="card-body">
                {{-- nombre --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre',  $plan->Nombre    ) }}" autofocus>
                  @if ($errors->has('Nombre'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('Nombre') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
                <a href="/TablaPlanes" class="btn btn-primary">Regresar</a>
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
