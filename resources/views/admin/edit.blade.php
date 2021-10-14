@extends('admin.users.index', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('actualizarEmpleado', $empelado->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Empleado</h4>
              <p class="card-category">Editar datos</p>
            </div>
            <div class="card-body">
                {{-- nombre --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" value="{{ old('name',  $empelado->name    ) }}" autofocus>
                  @if ($errors->has('name'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              {{-- apellido paterno --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Apellido paterno</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="a_paterno" value="{{ old('a_paterno',  $empelado->a_paterno    ) }}" autofocus>
                  @if ($errors->has('a_paterno'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              {{-- apellido paterno --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Apellido materno</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="a_materno" value="{{ old('a_materno',  $empelado->a_materno   ) }}" autofocus>
                  @if ($errors->has('a_materno'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              {{-- profesion --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Profesion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="profesion" value="{{ old('profesion',  $empelado->profesion   ) }}" autofocus>
                  @if ($errors->has('profesion'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              {{-- profesion --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Departamento</label>
                <div class="col-sm-7">
                  {{-- <input type="text" class="form-control" name="rol" value="{{ old('name',  $empelado->rol   ) }}" autofocus> --}}
                  <select class="form-select" aria-label="Default select example" name="rol" :value="{{ old('rol',  $empelado->rol ) }}">
                    <option selected> {{ old('rol',  $empelado->rol ) }} </option>
                    <option >admin</option>
                    <option >division</option>
                    <option >jefatura</option>
                    <option >academia</option>
                    <option >escolares</option>
                    <option >asesor</option>
                    
                 </select>
                  @if ($errors->has('rol'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('rol') }}</span>
                  @endif
                </div>
              </div>
              {{-- Carrera --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Carrera</label>
                <div class="col-sm-7">
                  
                  <select class="form-select" aria-label="Default select example" name="carrera" :value="{{ old('carrera',  $empelado->carrera ) }}">
                            <option selected> {{ old('rol',  $empelado->carrera ) }} </option>
                            <option >Sistemas Computacionales</option>
                            <option >Logistica</option>
                            <option >Gestion Empresarial</option>
                            <option >Industrial</option>
                            <option >Mecanica</option>
                            <option >Electrica</option>
                            <option >Electronica</option>
                            <option >Quimica</option>
                            <option >Bioquimica</option>
                    
                 </select>
                  @if ($errors->has('carrera'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('carrera') }}</span>
                  @endif
                </div>
              </div>
              {{-- Campus --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Campus</label>
                <div class="col-sm-7">
                  
                  <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus',  $empelado->campus ) }}">
                            <option selected> {{ old('campus',  $empelado->campus ) }} </option>
                            <option >Instituto Tecnologico de Tuxtla Gutierrez</option>
                               <option >Instituto Tecnologico de Comitan</option>
                               <option >Instituto Tecnologico de Tapachula</option>
                    
                 </select>
                  @if ($errors->has('campus'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('campus') }}</span>
                  @endif
                </div>
              </div>
              {{-- correo electronio --}}
              <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="email" value="{{ old('email', $empelado->email) }}">
                  @if ($errors->has('email'))
                    <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
                {{-- Cedula --}}
                <div class="row">
                    <label for="name" class="col-sm-2 col-form-label">Cedula</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="cedula"  value="{{ old('email', $empelado->cedula) }}">
                      @if ($errors->has('cedula'))
                        <span class="error text-danger" for="input-name">{{ $errors->first('cedula') }}</span>
                      @endif
                    </div>
                  </div>
              {{-- Contraseña --}}
              <div class="row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-7">
                  <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña sólo en caso de modificarla">
                  @if ($errors->has('password'))
                    <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
              {{-- telefono --}}
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">telefono</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="telefono" value="{{ old('telefono',  $empelado->telefono   ) }}" autofocus>
                  @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('telefono') }}</span>
                  @endif
                </div>
              </div>
            


            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
                <a href="/TablaUsers" class="btn btn-primary">Regresar</a>
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
