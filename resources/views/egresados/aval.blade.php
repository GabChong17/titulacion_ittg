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


<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<div class="container">

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    
@endsection

<div class="card">
    <div class="card-body">

 
<table id="usuarios" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Estado</th>
            <th>NC</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>Opción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ( $egresados as $egresado)
        <tr>
            <td>Estado</td>
            <td>{{ $egresado ->NoControl }}</td>
            <td>{{ $egresado ->Nombre }}</td>
            <td>{{ $egresado ->Carrera }}</td>
            <td>Opción</td>
            <td>Acciones</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
</div>
@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script >
     $('#usuarios').DataTable();
</script>

@endsection


</div>


</body>
</html>

