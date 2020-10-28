<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zapatillas de moda</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
    <!--stylesheet-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom-responsive-styles.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
    <div class="logo">
        {{-- <img src="{{asset('img/log.jpg')}}" alt="smith shoes"><span>Smith Shoes</span></i> --}}
    </div>
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="smooth-scroll" href="#Header"></a>
        </li>
        <li class="sidebar-nav-item">
            <a href="/index">Inicio</a>
        </li>
    </nav>  
    

    @yield('contenido')

    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/smithshoes1" target="_blank">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="https://www.facebook.com/smithshoes1" target="_blank">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        <a href="https://cisde.co/" target="_blank">
            <p class="text-muted small mb-0">Copyright © CISDE 2020</p>
        </a>
    </footer>

    <!-- scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all-plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins-activate.js')}}"></script>
</body>
</html>