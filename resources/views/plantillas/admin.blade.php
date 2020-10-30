<!DOCTYPE html>
<html lang="en">

<head>
  {{-- METAS --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CISDE">
  <meta name="copyright" content="© CISDE">
  <meta name="language" content="es"/>
  <meta name="robots" content="noindex, nofollow"/>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <title> Smith Shoes </title>
  {{-- FAVICON --}}
  <link rel="icon" href="{{asset('img/smith shoes-cisde.png')}}" type="image/png">	
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
        <a class="nav-link collapsed" href="/slider">
          <i class="fas fa-images"></i>
          <span>Pasarela</span>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="/tienda">
          <i class="fas fa-shopping-cart mr-2"></i>
          <span>Tienda</span> 
        </a>
      </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading MARCAS-->
        <div class="sidebar-heading">
          Marcas
        </div>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/marcas">
            <i class="fab fa-earlybirds"></i>
            <span>Gestionar</span>
          </a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Otros
      </div>  

      <!-- Nav Item - Pages  -->
      <li class="nav-item dropdown">
        <a class="nav-link" id="dropdownPages" role="button" data-toggle="dropdown"  aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Paginas</span> 
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownPages">
          <a class="dropdown-item" target="_blank" href="/">
            <i class="fas fa-location-arrow mr-2"></i>Principal
          </a>
          <a class="dropdown-item" target="_blank" href="/shop">
            <i class="fas fa-shopping-cart mr-2"></i> Tienda
          </a>
        </div>
      </li>

      <!-- Nav Item - email -->
      <li class="nav-item">
        <a class="nav-link" href="https://cisde.co/webmail" target="_blank">
          <i class="fas fa-envelope"></i>
          <span>Correo</span>
        </a>
      </li>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- NAVBAR -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>  
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="/usuario-create">{{ __('Register') }}</a>
                  </li>
              @endif  --}}
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <i class="fas fa-caret-down ml-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Cerrar Sesion') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </li>
          </ul>
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
            <a href="https://cisde.co/" target="_blank">Copyright &copy; CISDE 2020</a>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
  <!-- End of Page Wrapper -->
  
  <script src="{{asset('js/jquery.admin.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>

</html>
