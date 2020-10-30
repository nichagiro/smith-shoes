<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- METAS --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="subject" content="@yield('subject')">
    <meta name="author" content="@yield('author')">
    <meta name="copyright" content="@yield('copyright')">
    <meta name="language" content="@yield('language')"/>
    <meta name="revisit-after" content="@yield('revisit-after')"/>
    <meta name="robots" content="@yield('robots')"/>
    <meta http-equiv="Content-Type" content="@yield('Content-Type')" />
    <title> @yield('tittle') </title>
    {{-- FAVICON --}}
    <link rel="icon" href="{{asset('img/smith shoes-cisde.png')}}" type="image/png">	    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
    <!--stylesheet-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <link href="{{asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body> 
    

    @yield('contenido')

    <footer class="footer text-center">
        <a href="https://cisde.co/" target="_blank">
            <p class="text-muted small mb-0">Copyright © CISDE 2020</p>
        </a>
    </footer>

    {{-- Boton flotate --}}
    @include('plantillas.components.facebook')


    <!-- scripts -->
    {{-- <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all-plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins-activate.js')}}"></script> --}}
</body>
</html>