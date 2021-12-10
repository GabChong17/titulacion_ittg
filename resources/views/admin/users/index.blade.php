<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/admin/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administrador de Sistema</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/TablaUsers">
                    <i class="fas fa-address-card"></i>
                    <span>Tabla de Empleados</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/TablaPlanes">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Tabla de Planes</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrador
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-folder-plus"></i>
                    <span>Documentos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subida de documentos:</h6>
                        <a class="collapse-item" href="/SubidaProtocolo">Protocolos</a>
                        <a class="collapse-item" href="/SubidaJuramento">Juramento de Etica</a>
                    </div>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo"
                    aria-expanded="true" aria-controls="collapseTwoo">
                    <i class="fas fa-id-badge"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subida de documentos:</h6>
                        <a class="collapse-item" href="/agregaUsers">Agregar Empleados</a>
                        
                       
                    </div>
                </div>
            </li> --}}

            

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ITTG
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Division -->
            <li class="nav-item">
                <a class="nav-link" href="/division">
                    <i class="fas fa-folder-minus"></i>
                    <span>Division de Estudios</span></a>
            </li>

            {{-- <!-- Nav Item - Jefatura de departamento academico-->
            <li class="nav-item">
                <a class="nav-link" href="/jefatura">
                    <i class="fas fa-folder-minus"></i>
                    <span>Jefatura de dpto. Academico</span></a>
            </li> --}}

            <!-- Nav Item - Academia -->
            <li class="nav-item">
                <a class="nav-link" href="/academia">
                    <i class="fas fa-folder-minus"></i>
                    <span>Academia</span></a>
            </li>

            <!-- Nav Item - Servicios escolares -->
            <li class="nav-item">
                <a class="nav-link" href="/escolares">
                    <i class="fas fa-folder-minus"></i>
                    <span>Servicios Escolares</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>ITTG Pro</strong> Este sistema fue creado por el Instituto Tecnologico de Tuxtla Gutierrez - TecNM</p>
            </div>

        </ul>
        <!-- End of Sidebar -->

    @extends('admin.layouts.dashboard') <!-- Inicio Pagina de Administrador Gral.  -->

    @section('content')

    <div class="contenedor-titulo">
        <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
        <h2 style="padding: 50px 30px;">Administrador</h2></div>
    @endsection

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body"></div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();" class="btn btn-success">
        {{ __('Cerrar Sesión') }}
    </x-dropdown-link>
</form>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/admin/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/admin/demo/chart-area-demo.js"></script>
<script src="/js/admin/demo/chart-pie-demo.js"></script>
@yield('js')

</body>

</html>