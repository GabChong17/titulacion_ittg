<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @section('css')
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
       
    <title>ITTG - TITULACION</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/inicio">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-circle "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Inicio</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">          

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ITTG
            </div>

            {{-- @foreach ({{ Auth::user()->id }} ->plan->opciones as $opcion) --}}
            {{-- con est hacemos que el botton solo sea vicible por un administrador, necesitamos modificarlo para que sea visible para todo user con estado "tramite iniciado" --}}
            <!-- Nav Item - Menu inicio de tramite -->
          
            @if (Auth::user()->estado === 'Tramite_Iniciado' or Auth::user()->estado === null )
               
                <!-- Nav Item - Inicio-->
            <li class="nav-item">
                <a class="nav-link" href="/inicioProceso">
                    <i class="fas fa-scroll"></i>
                    <span>Inicio</span></a>
            </li>

            @else
            @endif

            @if (Auth::user()->estado === 'Documento_subido' or Auth::user()->estado === null )
               
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-folder-plus"></i>
                        <span>Inicio de Tramite</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">{{Auth::user()->plan->Nombre}}:</h6>
                            @foreach (Auth::user()->plan->opciones as $opcion)
                            <a class="collapse-item" href="/tramite/{{$opcion->id}}">{{$opcion->Nombre}}</a>
                            
                            @endforeach
                        </div>
                    </div>
                </li>

            @else
            @endif
            
           
           
            

            <!-- Nav Item - Liberacion-->
            <li class="nav-item">
                <a class="nav-link" href="/liberacion">
                    <i class="fas fa-folder-minus"></i>
                    <span>Proceso</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>ITTG Pro</strong> Este sistema fue creado por el Instituto Tecnologico de Tuxtla Gutierrez - TecNM</p>
            </div>

        </ul>
        <!-- End of Sidebar -->

    @extends('admin.layouts.dashboard') <!-- Inicio Pagina de Administrador Gral.  -->

    @section('content')
    
    <center>
        {{-- inicio --}}
        <div class="wrap">
        <div class="table">
        <ul>
          
        <li>
          <div class="top">
            <div class="circle">
                <img src="/Imagenes/ITTG_Escudo.png" style="width: 150px; height: 150px ;">    
            </div><br>
          </div>
          <div class="bottom">
            <p><span>Estado: </span><b>{{ Auth::user()->estado }}</b></p>
            <p><span>NoControl:  </span><b>{{ Auth::user()->NoControl }}</b></p>
            <p><span>Nombre:  </span><b>{{ Auth::user()->name }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}</b> </p>
            <p><span>Carrera:  </span><b>Ing. {{ Auth::user()->carrera }}</b></p>
           
            <div class="sign">
            
            </div>
          </div>
        </li>  
        </ul>
        </div>
        </div>
        {{-- final --}}
     
   
    
    <div class="contenedor-titulo">
        
    </div><br><br><br><br><br><br><br><br><br>


    <div class="footer mx-auto px-4 sm:px-6 lg:px-8">
        <p style="text-align:center;">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,</p>
        <p style="text-align:center;">Tels. (961)61 5 04 61, (961)61 5 01 38, (961) 61 5 48 08</P>
    </div>
    @endsection
    @section('js')        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>       
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
