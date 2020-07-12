<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bluemax| Dasb</title>
  <link rel="stylesheet" type="text/css" href="{{asset('datatables/datatables.css')}}">
 
 <script type="text/javascript" charset="utf8" src="{{asset('datatables/datatables.js')}}"></script>
 <script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://www.google.com/jsapi"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
<!--datatable!-->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
<style>
.titulos{
  color: #ffffff !important;
}
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<style>
.content-wrapper {
     /* Ruta relativa o completa a la imagen */
     background-image: url("data:image/jpeg;base64,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") !important;
     
     /* Centramos el fondo horizontal y verticalmente */
     background-position: center center;
     /* El fonde no se repite */
     background-repeat: no-repeat;
     /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
     background-attachment: fixed;
     /* El fonde se re-escala automáticamente */
     background-size: cover;
     /* Color de fondo si la imagen no se encuentra o mientras se está cargando */
     background-color: #FFF;
     /* Fuente para el texto */
     
     color: #000;
     
}
#content-wrapper:before {
	content:'';
	position: absolute;
        top: 0;
	bottom: 0;
	left: 0;
  right: 0;
  opacity:0.5;
	background-color: rgba(0,0,0,0.6);
}
</style> 
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav style="background-color: #e6ff9c !important;" class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a  class="nav-link">ADMINISTRABLE</a>
          
        </li>
      </ul>

      <!-- SEARCH FORM 
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>-->

      <!-- Right navbar links 
      <ul class="navbar-nav ml-auto">
        Messages Dropdown Menu
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
            Message Start
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
           Message End
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Message Start
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
             Message End 
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Message Start 
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            Message End
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        Notifications Dropdown Menu
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>!-->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">BluemaxDasb</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="{{asset('../storage/app/'.Auth::user()->foto)}}" class="img-circle elevation-2" alt="User Image">
          
            </div>
          <div class="info">
            <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <a href="#" class="nav-link">
              
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>

                  DASHBOARD

                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="{{route('empresa')}}" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                <p>

                 MI EMPRESA

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('encabezados')}}" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                <p>

                 Sección encabezado

                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('usuarios')}}" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                <p>

                 Usuarios

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('nosotros')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Sección nosotros
                 
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('servicios')}}" class="nav-link">
              
                <i class="nav-icon fas fa-people-arrows"></i>
                <p>
                  Sección servicios
                  
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('categorias')}}" class="nav-link">
              
                <i class="nav-icon fas fa-people-arrows"></i>
                <p>
                  Categorías
                  
                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="{{route('productos')}}" class="nav-link">
              
              <i class="nav-icon fas fa-person-booth"></i>
                <p>
                  Productos
                  
                </p>
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments-dollar"></i>
             
                <p>
                 SECCIÓN DESCRIPCIONES
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
             
              <i class="fas fa-photo-video nav-icon"></i>
                <p>
                SECCIÓN DESPLEGABLE
                </p>
              </a>
            </li>-->
          <!--  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Layout Options
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation + Sidebar</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                  </a>
                </li>

              </ul>!-->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-reply-all"></i>
                <p>

                 Cerrar Sesión

                </p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <section>
    <div class="content-wrapper" style="min-height: 926px;">
  
      @yield('contenido')

    </div>
    </section>
    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->
   @include('footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  
  <!--<script src="js/datatable.js"></script>!-->
  <script>
  $(document).ready(function() {
    $('.tabla').DataTable({
      responsive: true,
    "language": {

"sProcessing":     "Procesando...",
"sLengthMenu":     "Mostrar _MENU_ registros",
"sZeroRecords":    "No se encontraron resultados",
"sEmptyTable":     "Ningún dato disponible en esta tabla",
"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
"sInfoPostFix":    "",
"sSearch":         "Buscar:",
"sUrl":            "",
"sInfoThousands":  ",",
"sLoadingRecords": "Cargando...",
"oPaginate": {
"sFirst":    "Primero",
"sLast":     "Último",
"sNext":     "Siguiente",
"sPrevious": "Anterior"
},
"oAria": {
  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
}
    }
  } );} );
  </script>

  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>

 <!-- ******************************************************!-->
  <script src="{{asset('js/productos.js')}}"></script>
  <script src="{{asset('js/encabezados.js')}}"></script>
  <script src="{{asset('js/empresa.js')}}"></script>
  <script src="{{asset('js/usuarios.js')}}"></script>
  <script src="{{asset('js/categoria.js')}}"></script>
  <script src="{{asset('js/grupoensayo.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script type="text/javascript" src="{{asset('datatables/datatables.min.js')}}"></script>

</body>

</html>