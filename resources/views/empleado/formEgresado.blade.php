<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITTG</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>
<h1> {{$modo}} Egresado</h1>

@if(count($errors)>0)
<ul>
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
    </div>

    

@endif


<br>

    <div class="form-group">
    <label for="Nombre">Numero de control</label>
    <input type="text" class="form-control" name="NoControl" value="{{isset($egresado->NoControl)?$egresado->NoControl:old('NoControl')}}" id="NoControl">
    </div>

    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($egresado->Nombre)?$egresado->Nombre:old('Nombre')}}" id="Nombre">
    </div>

    <div class="form-group">
    <label for="APaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="APaterno" value="{{ isset($egresado->APaterno)?$egresado->APaterno:old('APaterno')}}" id="APaterno">
    </div>

    <div class="form-group">
    <label for="AMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="AMaterno" value="{{isset($egresado->AMaterno)?$egresado->AMaterno:old('AMaterno')}}" id="AMaterno">
    </div>

    <div class="form-group">
    <label for="Carrera">Carrera</label><br>
    {{-- <input type="text" class="form-control" name="Carrera" value="{{isset($egresado->Carrera)?$egresado->Carrera:old('Carrera')}}" id="Carrera"> --}}
    <div class="col-md-6">
        <select class="form-select" aria-label="Default select example" name="Carrera" value="{{ old('Carrera') }}">
            <option selected>Selecciona una Carrera</option>
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
    </div>
    </div>
    <br>
    <div class="form-group">
    <label for="Campus">Campus</label><br>
    {{-- <input type="text" class="form-control" name="Campus" value="{{isset($egresado->Campus)?$egresado->Campus:old('Campus')}}" id="Campus"> --}}
    <div class="col-md-6">
        <select class="form-select" aria-label="Default select example" name="Campus" value="{{ old('Campus') }}">
            <option selected>Selecciona un campus</option>
            <option >Instituto Tecnologico de Tuxtla Gutierrez</option>
            <option >Instituto Tecnologico de Comitan</option>
            <option >Instituto Tecnologico de Tapachula</option>
            <
          </select>
    </div>
    </div><br>

    <div class="form-group">
    <label for="PlanDeEstudios">PlanDeEstudios</label>
    <input type="text" class="form-control" name="PlanDeEstudios" value="{{isset($egresado->PlanDeEstudios)?$egresado->PlanDeEstudios:old('PlanDeEstudios')}}" id="Campus">
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" value="{{isset($egresado->email)?$egresado->email:old('email')}}" id="email">
    </div>

    <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono" value="{{isset($egresado->Telefono)?$egresado->Telefono:old('Telefono')}}" id="Telefono">
    </div>

    <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password" value="{{isset($egresado->password)?$egresado->password:old('password')}}" id="password">
    </div>

    
 
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    
    <a  class="btn btn-primary" href="{{url('avances/')}}">Regresar</a>
</body>
</html>

