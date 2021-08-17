@extends('admin.users.index')
    @section('content')

    
                 <!-- Begin Page Content --> 
                 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Administrador</h1>
    
</div>

<!-- Data Table  -->

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
            Tabla Usuarios </div>
    <div class="card body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Departamento</th>
                    <th>Carrera</th>
                    <th>Campus</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Roles</th>
                    <th>Permisos</th>
                    <th>Herramientas</th>
                </tr>
                </thead>
                <tfood>
                </tfood>
            <tbody>
                @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['a_paterno']}}</td>
                <td>{{$user['a_materno']}}</td>
                <td>{{$user['departamento']}}</td>
                <td>{{$user['carrera']}}</td>
                <td>{{$user['campus']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['telefono']}}</td>
                <td>Roles</td>
                <td>Permisos</td>
                <td>
                    <a href="/users/{{ $user['id'] }}"><i class="fa fa-eye"></i></a>
                    <a href="/users/{{ $user['id'] }}/edit"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

    @endsection