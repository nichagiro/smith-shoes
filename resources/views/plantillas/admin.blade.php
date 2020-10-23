<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smith Shoes</title>

  <!-- Custom fonts for this template-->
  <script defer src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMITH SHOES <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/superusuario">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Fotos
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/photos6">
          <i class="fas fa-image"></i>
          <span> inicio 6 fotos</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-images"></i>
          <span>los mas vendidos</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Otros
      </div>

      <!-- Nav Item - Pages  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
      </li>

      <!-- Nav Item - email -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-envelope"></i>
          <span>Correo</span></a>
      </li>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- NAVBAR -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        </nav>
      </div>
      <!-- NAVBAR-->

      {{-- CONTENIDO APLICACION --}}
      <div class="container w-100">
        @yield('content')
      </div>
        
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CISDE 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
  <!-- End of Page Wrapper -->



</body>

</html>
