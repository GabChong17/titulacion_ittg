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
    
    <title>División de Estudios Profesionales - Escritorio</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/division">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="sidebar-brand-text mx-3">División de Estudios Profesionales</div>
            </a> 
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Encabezado -->
            <div class="sidebar-heading">
                Opciones de Sistema
            </div>

            <!-- Peticiones al sistema -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-paper-plane"></i>
                    <span>Peticiones a otras Áreas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tramites</h6>
                        <a class="collapse-item" href="/divisionAval">Solicitud de Aval</a>
                        
                        
                    </div>
                </div>
            </li>

            <!-- Peticiones durante proceso -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Proceso Egresados </span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tramites</h6>
                        <a class="collapse-item" href="/PaseLiberacion">Pase de liberación</a>
                        {{-- <a class="collapse-item" href="/divicsionNoincoveniencia">Pase de No inconvenencia</a> --}}
                        <a class="collapse-item" href="/actoRecepcional">Prog. Acto Recepcional</a>
                    </div>
                </div>
            </li>
            <!-- Peticion de jurado -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJurado"
                    aria-expanded="true" aria-controls="collapseJurado">
                    <i class="fas fa-paste"></i>
                    <span>Integracion de jurado</span>
                </a>
                <div id="collapseJurado" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jurado</h6>
                        <a class="collapse-item" href="/integracionJurado">Integracion Jurado</a>
                        
                        
                    </div>
                </div>
            </li>   
            <!-- Divisor -->
            <hr class="sidebar-divider">

             {{-- <!-- Encabezado -->
             <div class="sidebar-heading">
                Proceso de Titulación
            </div>

            <!-- Integración de Jurado -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Formatos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Integración de Jurado</h6>
                        <a class="collapse-item" href="/divisionFormato">Formato Egresado/Jurado</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">
            
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

    @extends('admin.layouts.dashboard')

     @section('content')


       <div class="contenedor-titulo">
       <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px;">
       <h2 style="padding: 50px 30px;">División Escolar</h2></div>

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
                    
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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